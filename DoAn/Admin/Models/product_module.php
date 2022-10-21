<?php
    include_once "db_module.php";
    include_once "product.php";
    class product_module
    {
        public function CountAll()
        {
            $link = null;
            ConnectDatabase($link);
            $result_count = ExecuteQuery($link, "select count(*) from tbl_product where state = 1 ");
            $row = mysqli_fetch_row($result_count);
            return $row[0];
        }
        public function CountDeleted()
        {
            $link = null;
            ConnectDatabase($link);
            $result_count = ExecuteQuery($link, "select count(*) from tbl_product where state = 0 ");
            $row = mysqli_fetch_row($result_count);
            return $row[0];
        }
        public function Count_TK($key)
        {
            $link = null;
            ConnectDatabase($link);
            $result_count = ExecuteQuery($link, "select count(*) from tbl_product where name like '%$key%' and state = 1 ");
            $row = mysqli_fetch_row($result_count);
            return $row[0];
        }
        public function getProductList()
        {
            $link = null;
            ConnectDatabase($link);
            $result = ExecuteQuery($link, "select * from tbl_product where state = 1");
            $data = array();
            while($rows = mysqli_fetch_assoc($result))
            {
                $product = new Product($rows["id"], $rows["name"], $rows["price"], $rows["desc"], $rows["img"], $rows["id_maker"], $rows["time"]);
                array_push($data, $product);
            }
            ClearMemory($link, $result);
            return $data;
        }
        public function getProductListLimited($from, $size)
        {
            $link = null;
            ConnectDatabase($link);
            $result = ExecuteQuery($link, "select * from tbl_product where state = 1 limit $from, $size ");
            $data = array();
            while($rows = mysqli_fetch_assoc($result))
            {
                $product = new Product($rows["id"], $rows["name"], $rows["price"], $rows["desc"], $rows["img"], $rows["id_maker"], $rows["time"]);
                array_push($data, $product);
            }
            ClearMemory($link, $result);
            return $data;
        }
        public function getProductListLimitedDeleted($from, $size)
        {
            $link = null;
            ConnectDatabase($link);
            $result = ExecuteQuery($link, "select * from tbl_product where state = 0 limit $from, $size ");
            $data = array();
            while($rows = mysqli_fetch_assoc($result))
            {
                $product = new Product($rows["id"], $rows["name"], $rows["price"], $rows["desc"], $rows["img"], $rows["id_maker"], $rows["time"]);
                array_push($data, $product);
            }
            ClearMemory($link, $result);
            return $data;
        }
        public function getProductListLimitedByName($key, $from, $size)
        {
            $link = null;
            ConnectDatabase($link);
            $result = ExecuteQuery($link, "select * from tbl_product where name like '%$key%' and state = 1 limit $from, $size");
            $data = array();
            while($rows = mysqli_fetch_assoc($result))
            {
                $product = new Product($rows["id"], $rows["name"], $rows["price"], $rows["desc"],  $rows["img"], $rows["id_maker"], $rows["time"]);
                array_push($data, $product);
            }
            ClearMemory($link, $result);
            return $data;
        }
        public function getProduct($id)
        {
            $allproduct = $this->GetProductList();
            foreach($allproduct as $product)
            {
                if($product->getId() == $id)
                {
                    return $product;
                }
            }
            return null;
        }
    }
?>