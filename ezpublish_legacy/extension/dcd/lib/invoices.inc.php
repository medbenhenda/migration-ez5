<?php

/**
 * A collection of Invoices.
 *
 *
 * @package default
 * @author Daniel Noel-Davies
 * @version 2012-05-08
 *
 */
class Invoices{


	/**
	 * Finds a collection of Invoices based on the search criteria.
	 * <code>
	 * <?php
	 * 		$invoices = Invoices::find($conditions);
	 * ?>
	 * </code>
	 * @param array Search Conditions
	 * @return array
	 * @author Daniel Noel-Davies
	 * @since 2012-05-08
	 * @static
	 */
	public static function find($conditions = array()){
		global $language;

		/*
		$conn = get_connection();

		$sql_query = "	SELECT
							i.id, o.event_id
						FROM
							invoices i
						INNER JOIN orders o ON o.invoice_id = i.id
						WHERE
							1=1 ";

		foreach ($conditions as $key => $value) {
			switch ($key)
			{
				case 'paid':
					$sql_query .= " AND i.status = 3 ";
					break;

				case 'requested':
					$sql_query .= " AND i.status = 1 ";
					break;

				case 'denied':
					$sql_query .= " AND i.status = 2 ";
					break;

				case 'not_denied':
					$sql_query .= " AND i.status <> 2 ";
					break;

				case 'event_id':
					$sql_query .= " AND o.event_id = '".mysql_real_escape_string($value)."' ";
					break;

				case 'course_id':
					$sql_query .= " AND o.course_id = '".mysql_real_escape_string($value)."' ";
					break;
			}
		}

		if(isset($conditions["order"])){
			$sql_query	.= " ORDER BY ".mysql_real_escape_string($conditions["order"]). " ";
		} else {
			$sql_query	.= " ORDER BY i.id DESC";
		}


		if(isset($conditions["limit"])){
			$sql_query .= " LIMIT ". intval($conditions["limit"]);
		}

		$invoices_from_database = $conn->GetAll($sql_query);

		$collection = array();

		foreach ($invoices_from_database as $course_from_database) {

			$collection[] = new Course($course_from_database);
		}
	*/
		return $collection;
	}
}
