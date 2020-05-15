@extends('front.layout')

@section('pagetitle')
Customers List
@endsection

@section('pagecontent')
  <h1 class="display-2">Customer List</h1>
  <a href="/customers/create" class="btn btn-success mt-2 mb-2">Create New</a>
  
  <script>
      $(document).ready(function(){
        
        $('#cust_table').DataTable({
          "lengthMenu":[[15,40,80,100,-1],["10 عناصر",'fourty','eighty','hundred','All Yabasha']]
        });
      });
  </script>

  <table class="table" id="cust_table">
   <thead>
      <tr>
      
      <th>Customer Name</th>
      <th>Customer Phone</th>
      <th>Customer Email</th>
      <th>Customer address</th>
      
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($customers as $customer)
    <tr>
    
      <td>{{ $customer->cname }}</td>
      <td>{{ $customer->cphone }}</td>
      <td>{{ $customer->cemail }}</td>
      <td>{{ $customer->caddress }}</td>
      
      
      <td>
        <a href="/customers/{{ $customer->id }}" class="btn btn-secondary">View</a>
        
      </>
    </tr>
    
      @endforeach
      
    </tbody> 
    </table>
   
@endsection
