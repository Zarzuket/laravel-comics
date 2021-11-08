<div class="background">
    <div class="container">
        <div class="container_list">
            <ul>
                @foreach ($footerListFirst as $item => $abc)
                    @foreach ($abc as $qwe)                        
                    <li>
                        {{$qwe}}
                    </li>
                    @endforeach
                @endforeach
            </ul>
            <ul>
                {{-- @foreach ($footerListSecond as $item => $abc)
                    @foreach ($abc as $qwe)                        
                    <li>
                        {{$qwe}}
                    </li>
                    @endforeach --}}
              
            </ul>
        </div>
        <div class="container_list">
            <ul>
                {{-- <li v-for="(name,index) in menuT" :key="index">
                    {{name.name}}
                </li> --}}
            </ul>
        </div>
        <div class="container_list">
            <ul>
                {{-- <li v-for="(name,index) in menuFourth" :key="index">
                    {{name.name}}
                </li> --}}
            </ul>    
        </div>
    </div>
  </div>