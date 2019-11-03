
        @csrf
            <div class="form-group">
                    <label for="name">Name:</label>
                <input type="text" name="name" class="form-control">
                <div>{{$errors->first('name')}}</div>
            </div>
            
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" name="email" class="form-control">
                <div>{{$errors->first('email')}}</div>
            </div>
            
            <div class="form-group">
                <label for="number">Number:</label>
                <input type="text" name="number" class="form-control">
                <div>{{$errors->first('number')}}</div>
            </div>

            <div class="form-group">
                <label for="type">Company Type:</label>
                <input type="text" name="type" class="form-control">
                <div>{{$errors->first('type')}}</div>
            </div>

            <div class="form-group">
                    <label for="country">Country:</label>
                <input type="text" country="country" class="form-control">
                <div>{{$errors->first('country')}}</div>
            </div>
            
            <div class="form-group">
                <label for="state">State:</label>
                <input type="text" name="state" class="form-control">
                <div>{{$errors->first('state')}}</div>
            </div>
            
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" name="address" class="form-control">
                <div>{{$errors->first('address')}}</div>
            </div>

            <div class="form-group">
                <label for="profile">About company:</label>
                <textarea name="profile" id="profile" class="form-control" cols="60" rows="10">about your company...</textarea>
                <div>{{$errors->first('profile')}}</div>
            </div>
            
            <div class="form-group">
                <label for="YOE">Year of establishment:</label>
                <input type="text" name="YOE" class="form-control">
                <div>{{$errors->first('YOE')}}</div>
            </div>


            <div class="form-group d-flex flex-column">
                <label for="image">Profile image:</label>
                <input type="file" name="image" class="py-2">
                <div>{{$errors->first('image')}}</div>
            </div>