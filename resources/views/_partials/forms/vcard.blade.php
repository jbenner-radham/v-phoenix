 <div class="vcard">
     <fieldset>
         <legend>Name</legend>
         <div>
             {{-- [Email] --}}
             <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                 <label for="email">Email *</label>
                 <div class="col-sm-9">
                     <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                     {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                 </div>
             </div>
             {{-- [Family Name] --}}
             <div class="form-group {{ $errors->has('family_name') ? 'has-error' : '' }}">
                 <label for="familyName">Family Name *</label>
                 <div class="col-sm-9">
                     <input type="text" class="form-control" id="familyName" name="family_name" placeholder="Family Name">
                     {!! $errors->first('family_name', '<span class="help-block">:message</span>') !!}
                 </div>
             </div>
             {{-- [Given Name] --}}
             <div class="form-group {{ $errors->has('given_name') ? 'has-error' : '' }}">
                 <label for="givenName">Given Name *</label>
                 <div class="col-sm-9">
                     <input type="text" class="form-control" id="givenName" name="given_name" placeholder="Given Name">
                     {!! $errors->first('given_name', '<span class="help-block">:message</span>') !!}
                 </div>
             </div>
             {{-- [Title] --}}
             <div class="form-group">
                 <label for="title">Title</label>
                 <div class="col-sm-9">
                     <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                 </div>
             </div>
         </div>
     </fieldset>
     <fieldset>
         <legend>Address</legend>
         <div>
             {{-- [Street Address] --}}
             <div class="form-group">
                 <label for="streetAddress">Street Address</label>
                 <div class="col-sm-9">
                     <input type="text" class="form-control" id="streetAddress" name="street_address" placeholder="Street Address">
                 </div>
             </div>
             {{-- [Extended Address] --}}
             <div class="form-group">
                 <label for="extendedAddress">Extended Address</label>
                 <div class="col-sm-9">
                     <input type="text" class="form-control" id="extendedAddress" name="extended_address" placeholder="Extended Address">
                 </div>
             </div>
             {{-- [Region] --}}
             <div class="form-group">
                 <label for="region">Region</label>
                 <div class="col-sm-9">
                     <input type="text" class="form-control" id="region" name="region" placeholder="Region">
                 </div>
             </div>
             {{-- [Postal Code] --}}
             <div class="form-group">
                 <label for="postalCode">Postal Code</label>
                 <div class="col-sm-9">
                     <input type="text" class="form-control" id="postalCode" name="postal_code" placeholder="Postal Code">
                 </div>
             </div>
             {{-- [Country Name] --}}
             <div class="form-group">
                 <label for="countryName">Country Name</label>
                 <div class="col-sm-9">
                     <input type="text" class="form-control" id="countryName" name="country_name" placeholder="Country Name">
                 </div>
             </div>
             {{-- [Locality] --}}
             <div class="form-group">
                 <label for="locality">Locality</label>
                 <div class="col-sm-9">
                     <input type="text" class="form-control" id="locality" name="locality" placeholder="Locality">
                 </div>
             </div>
         </div>
     </fieldset>
     <fieldset>
         <legend>Kind</legend>
         {{-- [Entity Kind] --}}
         <div class="form-group {{ $errors->has('kind_id') ? 'has-error' : '' }}">
             <label for="entity-kind">Entity Kind *</label>
             <div class="col-sm-9">
                 <select class="form-control" id="entity-kind" name="kind_id">
                     <option value="" selected disabled>Choose ...</option>
                     @foreach ($kinds as $kind)
                         <option value="{{ $kind->id }}">@titleize($kind->name)</option>
                     @endforeach
                 </select>
                 {!! $errors->first('kind_id', '<span class="help-block">:message</span>') !!}
             </div>
         </div>
     </fieldset>
</div>
