@extends('layouts.homepage-dokter')
@section('main')


<div class="table-responsive">
    <table id="mainTable" class="table table-striped" style="cursor: pointer;">
        <thead>
            <tr>
                <th>SHIFT</th>
                <th>Durasi</th>
            <th>Tempat</th>
            <th>
                Senin<br>
                
            </th>
            <th>Selasa<br>
                
            </th>
            <th>Rabu<br>
                
            </th>
            <th>Kamis<br>
                
            </th>
            <th>Jumat<br>
                
            </th>
            <th>Sabtu<br>
                
            </th>
        </tr>

        @foreach ($jadwal as $sch)
            
        <tr>
            <th>{{$sch->shift}}</th>
            <th>{{$sch->durasi}}</th>
            <th>{{$sch->tempat}}</th>
            <th>
                @if ($sch->day=="Senin")
                    {{$sch->namapasien}}
                @endif
            </th>
            <th>
                @if ($sch->day=="Selasa")
                {{$sch->namapasien}}
                @endif
            </th>
            <th>
                @if ($sch->day=="Rabu")
                {{$sch->namapasien}}
                @endif
            </th>
            <th>
                @if ($sch->day=="Kamis")
                {{$sch->namapasien}}
                @endif
            </th>
            <th>
                @if ($sch->day=="Jumat")
                {{$sch->namapasien}}
                @endif
            </th>
            <th> 
                @if ($sch->day=="Sabtu")
                {{$sch->namapasien}}
                @endif
             </th>
        
        </tr>
        
            
        @endforeach
  
    </thead>
      
        
    </table>
</div>
@endsection