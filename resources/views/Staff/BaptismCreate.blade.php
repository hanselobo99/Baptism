@extends('layouts.app')
@section('content')
    <div class="container">
        <form method="post" action="{{route('insertData')}}">
            @csrf
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <h3>Baptism Details</h3>
                </div>
            </div>
            <div class="row">
                <div class="offset-2 col-8">
                    <div class="row">
                        <div class="col-6">
                            <x-form.text name="Rno" type="text">Register Number and year</x-form.text>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <x-form.text name="name" type="text">First Name</x-form.text>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <x-form.text name="Mname" type="text">Middle name</x-form.text>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <x-form.text name="surname" type="text">Surname</x-form.text>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <x-form.text name="FatherName" type="text">Father's name and Surname</x-form.text>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <x-form.text name="MotherName" type="text">Mother's name and Surname</x-form.text>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <x-form.text name="FatherResidence" type="text">Father's Residence</x-form.text>
                        </div>
                        <div class="col-6">
                            <x-form.text name="Nationality" type="text">Nationality</x-form.text>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <x-form.text name="DateOfBirth" type="date">Date of birth</x-form.text>
                        </div>
                        <div class="col-6">
                            <x-form.text name="PlaceOfBirth" type="text">Place of birth</x-form.text>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <x-form.text name="DateOfBaptism" type="date">Date of baptism</x-form.text>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <x-form.text name="GodFatherName" type="text">God Father's Name and surname</x-form.text>
                        </div>
                        <div class="col-6">
                            <x-form.text name="GodFatherRes" type="text">God Father's Residence</x-form.text>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <x-form.text name="GodMotherName" type="text">God Mother's Name and surname</x-form.text>
                        </div>
                        <div class="col-6">
                            <x-form.text name="GodMotherRes" type="text">God Mother's Residence</x-form.text>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <x-form.text name="MinisterOfBaptism" type="text">Minister Of Baptism</x-form.text>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <x-form.text name="PlaceOfBaptism" type="text">Place of Baptism</x-form.text>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <x-form.text name="Confirmation" type="date">Date of Confirmation</x-form.text>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <x-form.text name="DateOfMarriage" type="date">Date Of Marriage</x-form.text>
                        </div>
                        <div class="col-6">
                            <x-form.text name="Remarks" type="text">Remarks</x-form.text>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-1 d-flex justify-content-center">
                    <input type="submit" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>

@endsection
