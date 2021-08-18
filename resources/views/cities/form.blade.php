<label class="form-label" for="name">Name</label>
<input class="form-input" for="text" name="name" id="name" value="{{old('name', $city->name)}}">
            
<label class="form-label" for="state">State</label>
<input class="form-input" for="text" name="state" id="state" value="{{old('state', $city->state)}}">
            
<label class="form-label" for="population_2010">Population 2010</label>
<input class="form-input" for="text" name="population_2010" id="population_2010" value="{{old('population_2010', $city->population_2010)}}">
            
<label class="form-label" for="population_rank">Population Rank (In State)</label>
<input class="form-input" for="text" name="population_rank" id="population_rank" value="{{old('population_rank', $city->population_rank)}}">