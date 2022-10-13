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
        public function Count_TK($key)
        {
            $link = null;
            ConnectDatabase($link);
            $result_count = ExecuteQuery($link, "select count(*) from tbl_product where name like '%$key%' and state = 1 ");
            $row = mysqli_fetch_row($result_count);
            return $row[0];
        }
        public function Count_TKNC($time, $brand, $price)
        {
            $link = null;
            ConnectDatabase($link);
            $valuetime = ($time == '0')? "" : $time; 
            $valuebrand = ($brand == '0')? "" : $brand; 
            $valueprice = ($price == 0)? 10000000000 : $price; 
            $result_count = ExecuteQuery($link, "select count(*) from tbl_product where time like '%".$valuetime."%' and brand like '%".$valuebrand."%' and price <= $valueprice and state = 1 ");
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
                $product = new Product($rows["id"], $rows["name"], $rows["price"], $rows["desc"], $rows["img"], $rows["brand"], $rows["time"]);
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
                $product = new Product($rows["id"], $rows["name"], $rows["price"], $rows["desc"], $rows["img"], $rows["brand"], $rows["time"]);
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
                $product = new Product($rows["id"], $rows["name"], $rows["price"], $rows["desc"],  $rows["img"], $rows["brand"], $rows["time"]);
                array_push($data, $product);
            }
            ClearMemory($link, $result);
            return $data;
        }
        public function getProductListLimited_TKNC($time, $brand, $price, $from, $size)
        {
            
            $link = null;
            ConnectDatabase($link);
            $valuetime = ($time == '0')? "" : $time; 
            $valuebrand = ($brand == '0')? "" : $brand; 
            $valueprice = ($price == 0)? 10000000000 : $price; 
            $result = ExecuteQuery($link, "select * from tbl_product where time like '%".$valuetime."%' and brand like '%".$valuebrand."%' and price <= $valueprice and state = 1 limit $from, $size");
            $data = array();
            while($rows = mysqli_fetch_assoc($result))
            {
                $product = new Product($rows["id"], $rows["name"], $rows["price"], $rows["desc"],  $rows["img"], $rows["brand"], $rows["time"]);
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