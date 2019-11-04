
        @csrf
            <div class="form-group">
                    <label for="name">Name:</label>
                <input type="text" name="name" value="{{old('name') ?? $album->name}}" class="form-control">
                <div>{{$errors->first('name')}}</div>
            </div>

            <div class="form-group">
                <label for="description">Simple description:</label>
                <textarea name="description" id="description" placeholder="{{old('description') ?? $album->description}}"class="form-control" cols="60" rows="10"></textarea>
                <div>{{$errors->first('description')}}</div>
            </div>

            <div class="form-group d-flex flex-column">
                <label for="image">Profile image:</label>
                <input type="file" name="image" class="py-2">
                <div>{{$errors->first('image')}}</div>
            </div>