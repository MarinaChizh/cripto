<?php
$pages="<nav aria-label='Page navigation example'><ul class='pagination'> <a class='page-link' href='$currentURL&page=".($currentPage > 0 ? ($currentPage-1) : 0)."' aria-label='Previous'><span aria-hidden='true'>&laquo;</span></a>";

for ($i = 0; $i < $PageCount; $i++) {
    $pages .= "<li class='page-item". ($_GET['page'] == $i ? " active" : "") ."'><a class='page-link' href='$currentURL&page=$i'>". ($i + 1) ."</a></li>";
}
$pages .="<a class='page-link' href='$currentURL&page=".($currentPage < ($PageCount-1) ? ($currentPage+1) : ($PageCount-1))."' aria-label='Previous'><span aria-hidden='true'>&raquo;</span></a></ul></nav>";

$pages = "<nav aria-label='Page navigation example'><ul class='pagination'>$pages</ul></nav>";


echo $pages;
?>


<table class="table table-hover table-dark">
<?php
foreach($table as $v){
    echo "<tr>";
    
    foreach($v as $val){
        echo "<td>$val</td>";
    }
    echo "<td><a href='$targetDelURL&id=".$v['id']."'>Delete</td>";
    echo "<td><a href='$targetEditURL&id=".$v['id']."'>Edit</td></tr>";

    // echo "</tr>";


    if (isset($currentPage)&&($currentPage<=($PageCount-1)&&($currentPage>=0))) {
        $DB->set_page($currentPage);

    } else {
        $DB->set_page(0);
        $currentPage=0;
    }

    

//  echo $PageCount;
// echo $currentPage;   
}
?>
</table>
<?=$pages?>
<a href="<?=$targetAddURL?>" class="btn btn-primary">addform</a>
