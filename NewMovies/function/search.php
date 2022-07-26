<?php
    function search(){
        $host = "localhost";
        $user = "root";
        $pw = "";
        $db = "newmovies_db";
        $conn = new mysqli($host, $user, $pw, $db);
         // Phần code PHP xử lý tìm kiếm
         // Nếu người dùng submit form thì thực hiện
         if (isset($_REQUEST['ok'])) 
         {
             // Gán hàm addslashes để chống sql injection
             $search = addslashes($_GET['search']);
            
             // Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
             if (empty($search)) {
                 echo "";
             } 
             else
             {
                 // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
                 $query = "select * from movies where movie_name like '%$search%' OR movie_details like '%$search%'";
                
                 // Thực thi câu truy vấn
                 $sql = mysqli_query($conn, $query);
                 
                 // Đếm số đong trả về trong sql.
                 $num = mysqli_num_rows($sql);
                 // Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
                 if ($num > 0 && $search != "") 
                 {
                     $output = '';
                     while ($row = mysqli_fetch_assoc($sql)) {
 
                         $output .= '
                            
                                <img src="' . $row['movie_img'] . '" class="w-100 h-100"/>
                            
                                    <h3 style="font-weight: bold">' . $row['movie_name'] . '</h3>
                                    
                              
                         ';
                     }
                    echo $output;
                 } 
                 else {
                     echo "<h1> Can not find!!!'$search' </h1>";
                 }
             }
         }
        }
          
?>