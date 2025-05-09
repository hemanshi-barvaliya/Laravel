<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
<form id="frmData" class="form">
    @CSRF
    <table>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="save"></td>
        </tr>
    </table>
</form>

<table class="table">
    <th>id</th>
    <th>name</th>
    <th>email</th>
    <th>password</th>
    <th>Delete</th>
    <th>Update</th>

        <tbody id="res">
                            
            <?php foreach($data as $user) { ?>
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->password}}</td>
                    <td><a href="javascript:void(0)" delete-id="{{$user->id}}" class="delete">Delete</a></td>
                    <td><a href="javascript:void(0)" update-id="{{$user->id}}" class="update">update</a></td>

                </tr>
            <?php } ?>
   
        </tbody>
</table>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<form id="updateData" class="form">
    @CSRF
    <input type="hidden" name="uid" id="uid">
    <table>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name" id="name"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="email" id="email"></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password" id="password"></td>
        </tr>
    </table>

      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" value="Save changes">
      </div>
      </form>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
<script src="{{asset('js/jquery-3.7.1.min.js')}}"></script>

<script>
    $(document).on('submit','#frmData',function(e){
        e.preventDefault();

        var data = $(this).serialize();


        $.ajax({
            type:"POST",
            url:"{{URL('/ajax')}}",
            // data:{"_token": "{{ csrf_token() }}","val":val},
            data:data,

            success:function(res)
            {
                $('#res').html(res);
                $('#frmData')[0].reset();
            }
        })

    })

   

    $(document).on('click','.delete',function(){

        var d_id = $(this).attr('delete-id');


        $.ajax({
            type:"POST",
            url:"{{URL('/ajax')}}",
            data:{"_token": "{{ csrf_token() }}","d_id":d_id},

            success:function(res)
            {
                $('#res').html(res);
            }
        })

    })

    $(document).on('submit','#updateData',function(e){
        e.preventDefault();

        var data = $(this).serialize();


        $.ajax({
            type:"POST",
            url:"{{URL('/update')}}",
            // data:{"_token": "{{ csrf_token() }}","val":val},
            data:data,

            success:function(res)
            {
                $('#res').html(res);
                $('#updateData')[0].reset();
                $('#exampleModal').modal('hide');
            }
        })

    })

    $(document).on('click','.update',function(){

        var d_id = $(this).attr('update-id');


        $.ajax({
            type:"POST",
            url:"{{URL('/GetUpdateData')}}",
            dataType:"json",
            data:{"_token": "{{ csrf_token() }}","id":d_id},

            success:function(res)
            {
                $('#name').val(res.name);
                $('#email').val(res.email);
                $('#password').val(res.password);
                $('#uid').val(res.id);

                $('#exampleModal').modal("show");
            }
        })

    })
</script>
