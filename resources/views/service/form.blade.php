
        @csrf
            <div class="form-group">
                    <label for="name">Name your service:</label>
                <input type="text" name="name" class="form-control">
                <div>{{$errors->first('name')}}</div>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="description" class="form-control" cols="60" rows="10">give a little insight on your service...</textarea>
                <div>{{$errors->first('description')}}</div>
            </div>