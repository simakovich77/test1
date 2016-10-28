<textarea cols="150" rows ="30">
 <?php foreach ($d as $index => $dat) :

     echo $dat->text;

 endforeach;


 ?>



</textarea>

<script language="PHP">

function  but1()
{
    echo "111111";
    return $retval;
}

</script>

<p><input type="button" value="Проверить" onclick="but1()";"></p>