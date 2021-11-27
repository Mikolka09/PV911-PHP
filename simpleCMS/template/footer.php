</div>

<?php
echo "<div>" . __FILE__ . " = " . $myVar . " </div>";



if(function_exists("curl_init"))
    $c = curl_init();
else {
    echo " Наш сервер не поддерживает данную технологию";
}


if(function_exists("buildStandardTable")){
    echo "Функция есть";
} else {
    echo "Функции нет";
}

//echo buildStandardTable();
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>