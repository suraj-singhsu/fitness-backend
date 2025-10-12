@extends('admin.admin-master-layout2')
@section('after-login-section') 
<div class="container-fluid"> 
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-midnightblue">
        <div class="panel-heading">
          <h2>Add New Address</h2>
        </div>
        <div class="panel-body pt">
            <form id="addressForm">
                
                <pre>{{$userInfo}}</pre>
                    <div class="row">  
                        <div class="col-sm-3">
                          <div class="panel panel-profile">
                            <div class="panel-heading">
                              <h2>User Information</h2>
                            </div>
                            <div class="panel-body">
                              <img src="{{asset('admin-assets/demo/avatar/avatar_03.png')}}" class="img-circle">
                              <div class="name">{{$userInfo->name}}</div>
                              <div class="info">{{$userInfo->email}}</div>
                            </div>
                          </div><!-- panel --> 
                        </div>
                        <div class="col-sm-9">
                           <div class="row">
                              <!-- Country -->
                              <div class="col-sm-6">
                                 <label for="country_id" class="form-label mb-n">Country <span class="text-danger">*</span></label>
                                 <select name="country_id" id="country_id" class="form-control" required>
                                       <option value="">Select Country</option>
                                       <!-- Dynamically load countries here -->
                                 </select>
                              </div>

                              <!-- State -->
                              <div class="col-sm-6">
                                 <label for="state_id" class="form-label mb-n">State <span class="text-danger">*</span></label>
                                 <select name="state_id" id="state_id" class="form-control" required>
                                    <option value="">Select State</option>
                                 </select>
                              </div>

                              <!-- City -->
                              <div class="col-sm-6">
                                 <label for="city_id" class="form-label mb-n">City <span class="text-danger">*</span></label>
                                 <select name="city_id" id="city_id" class="form-control" required>
                                    <option value="">Select City</option>
                                 </select>
                              </div>
                              <!-- Pincode -->
                              <div class="col-sm-6">
                                 <label for="pincode" class="form-label mb-n">Pincode <span class="text-danger">*</span></label>
                                 <input type="text" name="pincode" id="pincode" onkeyup="search_pincode(this)" class="form-control" maxlength="6" placeholder="Enter Pincode" required>
                              </div>
                              <!-- Address Line 1 -->
                              <div class="col-sm-12 mt">
                                 <label for="address_line1" class="form-label mb-n">Address Line 1 <span class="text-danger">*</span></label>
                                 <input type="text" name="address_line1" id="address_line1" class="form-control" placeholder="Flat / House No / Building Name" required>
                              </div>
                              <!-- Latitude -->
                              <div class="col-sm-6 mb-3">
                              <label for="latitude" class="form-label">Latitude</label>
                              <input type="text" name="latitude" id="latitude" class="form-control" placeholder="Optional">
                              </div>

                              <!-- Longitude -->
                              <div class="col-sm-6 mb-3">
                              <label for="longitude" class="form-label">Longitude</label>
                              <input type="text" name="longitude" id="longitude" class="form-control" placeholder="Optional">
                              </div>
                              <!-- Address Line 2 -->
                              <div class="col-sm-12 mt">
                                 <label for="address_line2" class="form-label mb-n">Address Line 2</label>
                                 <input type="text" name="address_line2" id="address_line2" class="form-control" placeholder="Street / Locality / Landmark">
                              </div>
                           </div>
                        
                        

                        
                        

                        

                        

                        

                        <!-- Default Address Checkbox -->
                        <div class="col-sm-6 mb-3">
                          <div class="form-check mt-4">
                            <input class="form-check-input" type="checkbox" name="is_default" id="is_default" value="1">
                            <label class="form-check-label" for="is_default">
                              Set as Default Address
                            </label>
                          </div>
                        </div>
                        
                      </div>
                      <!-- Form Submit Button -->
                      <div class="text-end mt-3">
                        <button type="submit" class="btn btn-primary">Save Address</button>
                      </div>
                    </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="{{asset('admin-assets/plugins/form-multiselect/js/jquery.multi-select.min.js')}}"></script>  			<!-- Multiselect Plugin -->
<script type="text/javascript" src="{{asset('admin-assets/plugins/quicksearch/jquery.quicksearch.min.js')}}"></script>   
<script type="text/javascript" src="{{asset('admin-assets/plugins/form-select2/select2.min.js')}}"></script>  
<script>
  function search_pincode(pincodeObj){
    alert(pincodeObj.value);
    let api_key = '579b464db66ec23bdd000001cdd3946e44ce4aad7209ff7b23ac571b';
    $.ajax({
      url: 'https://api.data.gov.in/resource/5c2f62fe-5afa-4119-a499-fec9d604d5bd'+'?api-key='+api_key, // Laravel route
      type: 'GET',
      dataType: 'json',
      success: function(res) {
         console.log("res:", res);
         
      },
      error: function() {
          console.log('Error fetching address for pincode.');
      }
  });
  }
$(document).ready(function() {
  
    $('#pincode').on('keyup', function() {
        let pincode = $(this).val();
        console.log("pincode:", pincode);
        
        // Only trigger when 6 digits are entered
        if(pincode.length === 6) {
            // Call your API or AJAX route
            $.ajax({
                url: '/get-address-by-pincode/' + pincode, // Laravel route
                type: 'GET',
                dataType: 'json',
                success: function(res) {
                    if(res) {
                        // Fill state, city, country fields
                        $('#state_id').val(res.state_id);
                        $('#city_id').val(res.city_id);
                        $('#country_id').val(res.country_id);
                    } else {
                        console.log('No data found for this pincode.');
                    }
                },
                error: function() {
                    console.log('Error fetching address for pincode.');
                }
            });
        }
    });
});
</script>

@endsection