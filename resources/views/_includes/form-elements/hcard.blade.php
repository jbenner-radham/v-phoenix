 <div class="vcard">

    {{-- [Email] --}}
    <label>
        Email <input class="email" type="email" name="email">
    </label>

    <hr>

    {{-- [N] --}}
    <span class="n">

        {{-- [Family Name] --}}
        <label>
            Family Name <input type="text" class="family-name" name="family_name">
        </label>

        <hr>

        {{-- [Given Name] --}}
        <label>
            Given Name <input type="text" class="given-name" name="given_name">
        </label>
    </span> <!-- .n -->

     <hr>

     {{-- [Title] --}}
     <label>
         Title <input type="text" class="title" name="title">
     </label>

     <hr>

     {{-- [ADR] --}}
     <span class="adr">

         {{-- [Street Address] --}}
         <label>
             Street Address <input type="text" class="street-address" name="street_address">
         </label>

         <hr>

         {{-- [Extended Address] --}}
         <label>
             Extended Address <input type="text" class="extended-address" name="extended_address">
         </label>

         <hr>

         {{-- [Region] --}}
         <label>
             Region <input type="text" class="region" name="region">
         </label>

         <hr>

         {{-- Postal Code --}}
         <label>
             Postal Code <input type="text" class="postal-code" name="postal_code">
         </label>

         <hr>

         {{-- Country Name --}}
         <label>
             Country Name <input type="text" class="country-name" name="country_name">
         </label>

         <hr>

         {{-- Locality --}}
         <label>
             Locality <input type="text" class="locality" name="locality">
         </label>
     </span> <!-- .adr -->

     <hr>

     {{-- Kind --}}
     <label>
         Kind <select class="kind" name="kind_id">
             <option value="5">Device</option>
         </select>
     </label>
