<!-- Jawaban No 1 -->
<?php 
    // Tidak ditemukan customer_id 4 pada Orders column customer_id.
    // sehingga pelanggan yang tidak membuat pesanan adalah customer dengan customer_id 4 yaitu | 4           | Delta Corp    | Madrid        |
    // select c.customer_id, c.customer_name from customer c left join orders o on c.customer_id = o.customer_id where o.customer_id is null
?>

<!-- Jawaban No 2 -->
<?php 

function answer($data, $n){
    $counts = array_count_values($data);
    $res = [];

    foreach($data as $id){
        if($counts[$id] <= $n){
            $res[] = $id;
        }
    }

    return $res;
}

$data = [5, 10, 15, 10, 7];
$n = 1;
$result = answer($data,$n);

?>

<p>
    <?php foreach($result as $item) { ?>
        <span><?php print($item) ?></span>
    <?php } ?>
</p>