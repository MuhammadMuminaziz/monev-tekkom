<x-app-layout>
       <div class="row justify-content-center">
        <div class="col-md-12">

            @if($success == 'no data')
            <x-school-no-data/>
            @endif

            {{-- dont verify --}}
            @if($success == 'no verify')
            <x-school-no-verify :school="$school"/>
            @endif

            {{-- reject --}}
            @if($success == 'reject')
            <x-school-reject :school="$school"/>
            @endif

            {{-- verify --}}
            @if($success == 'data')
            <x-school-data :school="$school"/>
            @endif
        </div>
    </div>
</x-app-layout>