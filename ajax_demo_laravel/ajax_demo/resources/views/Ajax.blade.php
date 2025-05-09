
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
   