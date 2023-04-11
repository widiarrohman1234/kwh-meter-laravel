<form action="{{$url}}" method="post" onsubmit="return confirm('Apakah anda yakin akan menghapus data ini ?')">
    @csrf
    @method("delete")
    <button type="submit" class="btn btn-danger waves-effect">Delete</button>
</form>