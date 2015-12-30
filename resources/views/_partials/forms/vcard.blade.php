 <div class="vcard">
     <fieldset>
         <legend>Name</legend>
         <div>
             {{-- [Email] --}}
             <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                 <label for="email">Email *</label>
                 <div>
                     <input type="email" id="email" name="email" placeholder="Email"
                            value="{{ $entity->email or (old('email')) ?: '' }}">
                     {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                 </div>
             </div>
             {{-- [Family Name] --}}
             <div class="form-group {{ $errors->has('family_name') ? 'has-error' : '' }}">
                 <label for="familyName">Family Name *</label>
                 <div>
                     <input type="text" id="familyName" name="family_name" placeholder="Family Name"
                            value="{{ $entity->family_name or (old('family_name')) ?: '' }}">
                     {!! $errors->first('family_name', '<span class="help-block">:message</span>') !!}
                 </div>
             </div>
             {{-- [Given Name] --}}
             <div class="form-group {{ $errors->has('given_name') ? 'has-error' : '' }}">
                 <label for="givenName">Given Name *</label>
                 <div>
                     <input type="text" id="givenName" name="given_name" placeholder="Given Name"
                            value="{{ $entity->given_name or (old('given_name')) ?: '' }}">
                     {!! $errors->first('given_name', '<span class="help-block">:message</span>') !!}
                 </div>
             </div>
             {{-- [Title] --}}
             <div class="form-group">
                 <label for="title">Title</label>
                 <div>
                     <input type="text" id="title" name="title" placeholder="Title"
                            value="{{ $entity->title or (old('title')) ?: '' }}">
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
                 <div>
                     <input type="text" id="streetAddress" name="street_address" placeholder="Street Address"
                            value="{{ $entity->street_address or (old('street_address')) ?: '' }}">
                 </div>
             </div>
             {{-- [Extended Address] --}}
             <div class="form-group">
                 <label for="extendedAddress">Extended Address</label>
                 <div>
                     <input type="text" id="extendedAddress" name="extended_address" placeholder="Extended Address"
                            value="{{ $entity->extended_address or (old('extended_address')) ?: '' }}">
                 </div>
             </div>
             {{-- [Region] --}}
             <div class="form-group">
                 <label for="region">Region</label>
                 <div>
                     <input type="text" id="region" name="region" placeholder="Region"
                            value="{{ $entity->region or (old('region')) ?: '' }}">
                 </div>
             </div>
             {{-- [Postal Code] --}}
             <div class="form-group">
                 <label for="postalCode">Postal Code</label>
                 <div>
                     <input type="text" id="postalCode" name="postal_code" placeholder="Postal Code"
                            value="{{ $entity->postal_code or (old('postal_code')) ?: '' }}">
                 </div>
             </div>
             {{-- [Country Name] --}}
             <div class="form-group">
                 <label for="countryName">Country Name</label>
                 <div>
                     <input type="text" id="countryName" name="country_name" placeholder="Country Name"
                            value="{{ $entity->country_name or (old('country_name')) ?: '' }}">
                 </div>
             </div>
             {{-- [Locality] --}}
             <div class="form-group">
                 <label for="locality">Locality</label>
                 <div>
                     <input type="text" id="locality" name="locality" placeholder="Locality"
                            value="{{ $entity->locality or (old('locality')) ?: '' }}">
                 </div>
             </div>
         </div>
     </fieldset>
     <fieldset>
         <legend>Kind</legend>
         {{-- [Entity Kind] --}}
         <div class="form-group {{ $errors->has('kind_id') ? 'has-error' : '' }}">
             <label for="entity-kind">Entity Kind *</label>
             <div>
                 <select id="entity-kind" name="kind_id">
                     <option value="" {{ (!isset($entity->kind) ? 'selected' : '') }} disabled>Choose ...</option>
                     @foreach (App\Kind::all() as $kind)
                         <option value="{{ $kind->id }}"
                                 {{ (isset($entity->kind_id) ? ($entity->kind_id == $kind->id ? 'selected' : '') : '') }}>
                             @titleize($kind->name)
                         </option>
                     @endforeach
                 </select>
                 {!! $errors->first('kind_id', '<span class="help-block">:message</span>') !!}
             </div>
         </div>
     </fieldset>
</div>
