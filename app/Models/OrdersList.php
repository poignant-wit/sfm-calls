<?php
/**
 * Created by PhpStorm.
 * User: silafm
 * Date: 09.03.16
 * Time: 11:26
 */

namespace SFMCalls\Models;

use DB;

class OrdersList
{
    public static function getOrdersToList()
    {

        $query = '
        SELECT e.order_id,
        e.created_date,
        e.creator,
        e.customer_name,
        e.last_action,
        e.last_action_type,
        e.last_action_id
        FROM
        (SELECT *
        FROM (SELECT
        actions.order_id AS order_id,
        actions.id as last_action_id,
        b.creator AS creator,
        b.created_date AS created_date,

        action_types.action AS last_action,
        action_types.type AS last_action_type,
        actions.created_at  AS last_action_date

        FROM (SELECT
              actions.order_id,
              max(actions.id) AS max_id
            FROM actions
            GROUP BY actions.order_id) a
        INNER JOIN actions ON a.max_id = actions.id
        INNER JOIN action_types ON actions.action_type_id = action_types.id

        INNER JOIN (SELECT
                      actions.created_at AS created_date,
                      actions.order_id,
                      actions.action_type_id,
                      actions.user_id,
                      action_types.action,
                      users.username     AS creator
                    FROM actions
                      INNER JOIN action_types ON actions.action_type_id = action_types.id
                      INNER JOIN users ON actions.user_id = users.id

                   )
          AS b ON a.order_id = b.order_id

          WHERE b.action_type_id = 1
          ) c
          INNER JOIN (SELECT
                customers.name AS customer_name,
                orders.id
              FROM orders
                INNER JOIN customers ON orders.customer_id = customers.id) AS d ON c.order_id = d.id) AS e
                ORDER BY order_id DESC
        ';

        $result = DB::select(DB::raw($query));
        return $result;
    }

}