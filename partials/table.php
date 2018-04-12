<?php 
    include "./bdd/getData.php";
        foreach ($data as $value) {
?>
    <tr>
       <td><?php echo $value['career'];?></td>
       <td class="center-grid"> 
            <form action="./bdd/delete.php" method="post">
                <input type="hidden" name="id_career" value="<?php echo $value['id_career'];?>">
                <button 
                    type="submit"  
                    class="btn btn-danger btn-sm">
                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                </button> 
            </form>
        </td>
    </tr>
<?php } 
?>