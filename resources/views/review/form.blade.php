
        @csrf
            <div class="form-group">
                <label for="review">Review:</label>
                <textarea name="review" id="review" class="form-control" cols="60" rows="10">enter your review...</textarea>
                <div>{{$errors->first('review')}}</div>
            </div>
            
            <div class="form-group d-flex flex-column">
                <label for="image">Image:</label>
                <input type="file" name="image" class="py-2">
                <div>{{$errors->first('image')}}</div>
            </div>