 <div class="vcard">
     <fieldset>
         <legend>Name</legend>
         <div class="col-xs-12">
             {{-- [Email] --}}
             <div class="form-group">
                 <label for="email" class="col-sm-3 control-label vcard-label">Email</label>
                 <div class="col-sm-9">
                     <input type="email" class="form-control" id="email" placeholder="Email">
                 </div>
             </div>
             {{-- [Family Name] --}}
             <div class="form-group">
                 <label for="familyName" class="col-sm-3 control-label vcard-label">Family Name</label>
                 <div class="col-sm-9">
                     <input type="text" class="form-control" id="familyName" placeholder="Family Name">
                 </div>
             </div>
             {{-- [Given Name] --}}
             <div class="form-group">
                 <label for="givenName" class="col-sm-3 control-label vcard-label">Given Name</label>
                 <div class="col-sm-9">
                     <input type="text" class="form-control" id="givenName" placeholder="Given Name">
                 </div>
             </div>
             {{-- [Title] --}}
             <div class="form-group">
                 <label for="title" class="col-sm-3 control-label vcard-label">Title</label>
                 <div class="col-sm-9">
                     <input type="text" class="form-control" id="title" placeholder="Title">
                 </div>
             </div>
         </div>
     </fieldset>
     <fieldset>
         <legend>Address</legend>
         <div class="col-xs-12">
             {{-- [Street Address] --}}
             <div class="form-group">
                 <label for="streetAddress" class="col-sm-3 control-label vcard-label">Street Address</label>
                 <div class="col-sm-9">
                     <input type="text" class="form-control" id="streetAddress" placeholder="Street Address">
                 </div>
             </div>
             {{-- [Extended Address] --}}
             <div class="form-group">
                 <label for="extendedAddress" class="col-sm-3 control-label vcard-label">Extended Address</label>
                 <div class="col-sm-9">
                     <input type="text" class="form-control" id="extendedAddress" placeholder="Extended Address">
                 </div>
             </div>
             {{-- [Region] --}}
             <div class="form-group">
                 <label for="region" class="col-sm-3 control-label vcard-label">Region</label>
                 <div class="col-sm-9">
                     <input type="text" class="form-control" id="region" placeholder="Region">
                 </div>
             </div>
             {{-- [Postal Code] --}}
             <div class="form-group">
                 <label for="postalCode" class="col-sm-3 control-label vcard-label">Postal Code</label>
                 <div class="col-sm-9">
                     <input type="text" class="form-control" id="postalCode" placeholder="Postal Code">
                 </div>
             </div>
             {{-- [Country Name] --}}
             <div class="form-group">
                 <label for="countryName" class="col-sm-3 control-label vcard-label">Country Name</label>
                 <div class="col-sm-9">
                     <input type="text" class="form-control" id="countryName" placeholder="Country Name">
                 </div>
             </div>
             {{-- [Locality] --}}
             <div class="form-group">
                 <label for="locality" class="col-sm-3 control-label vcard-label">Locality</label>
                 <div class="col-sm-9">
                     <input type="text" class="form-control" id="locality" placeholder="Locality">
                 </div>
             </div>
         </div>
     </fieldset>
     <fieldset>
         <legend>Kind</legend>
         {{-- [Entity Kind] --}}
         <div class="form-group">
             <label for="entity-kind" class="col-sm-3 control-label vcard-label">Entity Kind</label>
             <div class="col-sm-9">
                 <select class="form-control" name="entity-kind">
                     <option selected disabled>Choose ...</option>
                     @foreach ($kinds as $kind)
                         <option value="{{ $kind->id }}">@titleize($kind->name)</option>
                     @endforeach
                 </select>
             </div>
         </div>
     </fieldset>
</div>