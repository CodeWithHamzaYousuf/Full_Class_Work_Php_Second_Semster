<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <input type="text" id="search" name="query" placeholder="Search By Any Detail"/><br><br>
    <div id="result"></div>
    <button></button>
</body>
</html>

<script>
    $(document).ready(function(){
        load_data();

        function load_data(query){
            $.ajax({
                url:"fetch.php",
                method:"POST",
                data:{query:query},
                success:function(data){
                    $('#result').html(data);
                }
            });
        }

        $('#search').keyup(function(){
            var search = $(this).val();
            if(search != ''){
                load_data(search);
            }
            else{
                load_data();
            }
        });
    });
</script>