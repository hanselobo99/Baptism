@extends('layouts.app')
@section('content')

    <div class="container" id="printContent">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h2>CERTIFICATE OF BAPTISM</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <p>Extract from the Register of the church of
                        .................................................................................................</p>
                    <hr>
                </div>

                @php
                    $count = 1;
                @endphp
                <x-display val="{{$record->Rno}}">{{$count++}}. Register number and year</x-display>
                <x-display val="{{$record->FirstName}}">{{$count++}}. First Name</x-display>
                @if($record->MiddleName)
                    <x-display val="{{$record->MiddleName}}">{{$count++}}. Middle Name</x-display>
                @endif
                <x-display val="{{$record->LastName}}">{{$count++}}. Last Name</x-display>
                <x-display val="{{$record->baptismDetail->FathersName}}">{{$count++}}. Father's Name</x-display>
                <x-display val="{{$record->baptismDetail->MothersName}}">{{$count++}}. Mother's Name</x-display>
                <x-display val="{{$record->baptismDetail->FathersResidence}}">{{$count++}}. Father's Residence
                </x-display>
                <x-display val="{{$record->baptismDetail->Nationality}}">{{$count++}}. Nationality</x-display>
                <x-display val="{{$record->DateOfBirth}}">{{$count++}}. Date Of Birth</x-display>
                <x-display val="{{$record->baptismDetail->PlaceOfBirth}}">{{$count++}}. Place of Birth</x-display>
                <x-display val="{{$record->baptismDetail->DateOfBaptism}}">{{$count++}}. Date of Baptism</x-display>
                <x-display val="{{$record->baptismDetail->GodFathersName}}">{{$count++}}. GodFathers Name</x-display>
                <x-display val="{{$record->baptismDetail->GodFathersRes}}">{{$count++}}. Residence</x-display>
                <x-display val="{{$record->baptismDetail->GodMothersName}}">{{$count++}}. GodMothers Name</x-display>
                <x-display val="{{$record->baptismDetail->GodMothersRes}}">{{$count++}}. Residence</x-display>
                <x-display val="{{$record->baptismDetail->MinisterOfBaptism}}">{{$count++}}. Minister of Baptism
                </x-display>
                <x-display val="{{$record->baptismDetail->PlaceOfBaptism}}">{{$count++}}. Place of Baptism</x-display>
                @if($record->baptismDetail->DateOfConfirmation)
                    <x-display val="{{$record->baptismDetail->DateOfConfirmation}}">{{$count++}}. Date of Confirmation
                    </x-display>
                @endif
                @if($record->baptismDetail->DateOfMarriage)
                    <x-display val="{{$record->baptismDetail->DateOfMarriage}}">{{$count++}}. Date of Marriage
                    </x-display>
                @endif
                @if($record->baptismDetail->Remarks)
                    <x-display val="{{$record->baptismDetail->Remarks}}">{{$count++}}. Remarks</x-display>
                @endif
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center mt-2">
                <a id="printBtn" class="btn btn-primary">Print</a>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <script>
        $("#printBtn").click(function () {
            var contents = $("#printContent").html();
            var frame1 = $('<iframe />');
            frame1[0].name = "frame1";
            frame1.css({"position": "absolute", "top": "-1000000px"});
            $("body").append(frame1);
            var frameDoc = frame1[0].contentWindow ? frame1[0].contentWindow : frame1[0].contentDocument.document ? frame1[0].contentDocument.document : frame1[0].contentDocument;
            frameDoc.document.open();
            // frameDoc.document.write('<html><head><title>DIV Contents</title>');
            // frameDoc.document.write('</head><body>');
            frameDoc.document.write('<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />');
            frameDoc.document.write(contents);
            // frameDoc.document.write('</body></html>');
            frameDoc.document.close();

            setTimeout(function () {
                window.frames["frame1"].focus();
                window.frames["frame1"].print();
                frame1.remove();
            }, 500);
            console.log('PrintDone')
        });
    </script>

@endsection
