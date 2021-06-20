<div>
   <form wire:submit.prevent="submit">
      @if(session()->has('berhasil'))
      <div style="color: green">{{session('berhasil')}}</div>
      @endif
      Name: <br> <input type="text" wire:model="name"><br>
      @error('name')
      <span style="color:red">{{'Nama Wajib di isi, minimal 3 karakter'}}</span><br>
      @enderror
      
      Email: <br> <input type="email" wire:model="email"><br>
      @error('email')
      <span style="color:red">{{'Email Wajib di isi'}}</span><br><br>
      @enderror
      <div>
      <button  type="submit">Save</button>
      </div>
   </form>

   <table class="table table-bordered table-hover">
      
         <tr>
         <th>No.</th>
         <th>Name</th>
         <th>Email</th>
         </tr>
      
      @php 
      $i=1;
      @endphp
      @foreach($allData as $index=>$ad)
      <tbody>
      <tr>
         <td>{{$index+1}}</td>
         <td>{{$ad->name}}</td>
         <td>{{$ad->email}}</td>
      </tr>
      </tbody>
      @php 
      $i++;
      @endphp
      @endforeach
      </table>
     {{$allData->links()}}
</div>
