<form method="POST" enctype="multipart/form-data">
    @csrf
    <table>
        <tr>
            <td>Image name
                <input type="text" name="iname" value="{{ $list[0]->iname }}"></td>
        </tr>
        <tr>
            <td><input type="file" name="profile"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Update Image"></td>
        </tr>
    </table>
</form>
