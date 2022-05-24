@include('../layuot.header');
<form method="post" action="{{url('/department/update/'.$dept->id)}}">
    @csrf

    <div class="mb-3">
        <input type="text" class="form-control" name="departName" placeholder="Department Name" value={{$dept->name}}>
    </div>
    <div class="mb-3">
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="departDescription" placeholder="Department Description"> {{$dept->description}}</textarea>
    </div>
    <input type="submit" class="btn btn-primary w-100 mt-3">
</form>
@include('../layuot.footer');
 

