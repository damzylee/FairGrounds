
        @csrf
            <div class="form-group">
                    <label for="name">Name your image:</label>
                <input type="text" name="name" class="form-control">
                <div>{{$errors->first('name')}}</div>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="description" class="form-control" cols="60" rows="10">A brief discription of the image...</textarea>
                <div>{{$errors->first('description')}}</div>
            </div>

            <div class="form-group d-flex flex-column">
                <label for="image">Profile image:</label>
                <input type="file" name="image" class="py-2">
                <div>{{$errors->first('image')}}</div>
            </div>