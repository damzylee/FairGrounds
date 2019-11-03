
        @csrf
            <div class="form-group">
                    <label for="type">Subscription type:</label>
                <input type="text" name="type" class="form-control">
                <div>{{$errors->first('type')}}</div>
            </div>
            
            <div class="form-group">
                <label for="amount">Amount:</label>
                <input type="text" name="amount" class="form-control">
                <div>{{$errors->first('amount')}}</div>
            </div>