<input type="text" id="res">

<table border="">
    <th>No</th>
    <th>Data</th>
        <tbody id="res">
        <tr>
            <td>1</td>
            <td></td>
        </tr>
        <tr>
            <td>2</td>
            <td></td>
        </tr>
        </tbody>
</table>

<script src="{{asset('js/jquery-3.7.1.min.js')}}"></script>

<script>
    $(document).on('keyup','#name',function(){
        
        var val = $(this).val();

        $.ajax({
            type:"POST",
            url:"{{URL('/ajax')}}",
            data:{"_token": "{{ csrf_token() }}","val":val},

            success:function(res)
            {
                $('#res').html(res);
            }
        })

    })
</script>
