@extends('layouts.siswa')

@section('content')
    <div class="container-fluid p-4 p-md-5">
        <h1 class="mb-0">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="38"
                height="38"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="icon icon-tabler icons-tabler-outline icon-tabler-school"
            >
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6" />
                <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4" />
            </svg>
            Data Berkas Persyaratan
        </h1>
        <div class="alert alert-warning mt-4" role="alert">
            <strong>Perhatian!</strong> Sistem hanya menerima unggahan dengan format gambar (JPG,JPEG,PNG) dan maksimal ukuran 5 MB.
        </div>
        <div class="card shadow mt-4">
            <form action="{{ route('data-berkas-update', $data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="rapor" class="form-label"
                                >Rapor Kelas IX Semester 1 <span class="text-danger">*</span></label
                            >
                            <input
                                name="rapor"
                                type="file"
                                id="rapor"
                                class="form-control"
                                accept="jpg, jpeg, png"
                                onchange="validateFileSize(this)"
                            />
                            @error('rapor')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        @if ($data->rapor === null)
                            <div class="col-md-6"> 
                                <img id="showImageRapor" src="{{ url('images/no-data.jpg')}}" alt="Admin" class="p-1 bg-primary w-100"> 
                            </div>
                        @else
                            <div class="col-md-6"> 
                                <img id="showImageRapor" src="{{ url($data->rapor)}}" alt="Admin" class="p-1 bg-primary w-100"> 
                            </div>
                        @endif
                        <div class="col-md-6">
                            <label for="ijazah" class="form-label"
                                >Rapor Ijazah SMP/MTs/Sederajat <span class="text-danger">*</span></label
                            >
                            <input
                                name="ijazah"
                                type="file"
                                id="ijazah"
                                class="form-control"
                                accept="jpg, jpeg, png"
                                onchange="validateFileSize(this)"
                            />
                            @error('ijazah')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        @if ($data->ijazah === null)
                            <div class="col-md-6"> 
                                <img id="showImageIjazah" src="{{ url('images/no-data.jpg')}}" alt="Admin" class="p-1 bg-primary w-100"> 
                            </div>
                        @else
                            <div class="col-md-6"> 
                                <img id="showImageIjazah" src="{{ url($data->ijazah)}}" alt="Admin" class="p-1 bg-primary w-100"> 
                            </div>
                        @endif
                        <div class="col-md-6">
                            <label for="kartu_keluarga" class="form-label"
                                >Kartu Keluarga <span class="text-danger">*</span></label
                            >
                            <input
                                name="kartu_keluarga"
                                type="file"
                                id="kartu_keluarga"
                                class="form-control"
                                accept="jpg, jpeg, png"
                                onchange="validateFileSize(this)"
                            />
                            @error('kartu_keluarga')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        @if ($data->kartu_keluarga === null)
                            <div class="col-md-6"> 
                                <img id="showImageKK" src="{{ url('images/no-data.jpg')}}" alt="Admin" class="p-1 bg-primary w-100">
                            </div>
                        @else
                            <div class="col-md-6"> 
                                <img id="showImageKK" src="{{ url($data->kartu_keluarga)}}" alt="Admin" class="p-1 bg-primary w-100">
                            </div>
                        @endif
                        <div class="col-md-6">
                            <label for="akta" class="form-label"
                                >Akta Kelahiran <span class="text-danger">*</span></label
                            >
                            <input
                                name="akta"
                                type="file"
                                id="akta"
                                class="form-control"
                                accept="jpg, jpeg, png"
                                onchange="validateFileSize(this)"
                            />
                             @error('akta')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        @if ($data->akta === null)
                            <div class="col-md-6"> 
                                <img id="showImageAkta" src="{{ url('images/no-data.jpg')}}" alt="Admin" class="p-1 bg-primary w-100"> 
                            </div>
                        @else
                            <div class="col-md-6"> 
                                <img id="showImageAkta" src="{{ url($data->akta)}}" alt="Admin" class="p-1 bg-primary w-100"> 
                            </div>
                        @endif
                        <div class="col-md-6">
                            <label for="kip" class="form-label"
                                >KIP (jika ada)</label
                            >
                            <input
                                name="kip"
                                type="file"
                                id="kip"
                                class="form-control"
                                accept="jpg, jpeg, png"
                                onchange="validateFileSize(this)"
                            />
                             @error('kip')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                         @if ($data->kip === null)
                            <div class="col-md-6"> 
                                <img id="showImageKip" src="{{ url('images/no-data.jpg')}}" alt="Admin" class="p-1 bg-primary w-100"> 
                            </div>
                        @else
                            <div class="col-md-6"> 
                                <img id="showImageKip" src="{{ url($data->kip)}}" alt="Admin" class="p-1 bg-primary w-100"> 
                            </div>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col text-end">
                            <button type="submit" class="btn tombol mt-3">Simpan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @push('scripts')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script type="text/javascript">

            $(document).ready(function(){
                $('#rapor').change(function(e){
                    var reader = new FileReader();
                    reader.onload = function(e){
                        $('#showImageRapor').attr('src',e.target.result);
                    }
                    reader.readAsDataURL(e.target.files['0']);
                });
                $('#ijazah').change(function(e){
                    var reader = new FileReader();
                    reader.onload = function(e){
                        $('#showImageIjazah').attr('src',e.target.result);
                    }
                    reader.readAsDataURL(e.target.files['0']);
                });
                $('#kartu_keluarga').change(function(e){
                    var reader = new FileReader();
                    reader.onload = function(e){
                        $('#showImageKK').attr('src',e.target.result);
                    }
                    reader.readAsDataURL(e.target.files['0']);
                });
                $('#akta').change(function(e){
                    var reader = new FileReader();
                    reader.onload = function(e){
                        $('#showImageAkta').attr('src',e.target.result);
                    }
                    reader.readAsDataURL(e.target.files['0']);
                });
                $('#kip').change(function(e){
                    var reader = new FileReader();
                    reader.onload = function(e){
                        $('#showImageKip').attr('src',e.target.result);
                    }
                    reader.readAsDataURL(e.target.files['0']);
                });
            });

            function validateFileSize(input) {
                const maxSize = 5 * 1024 * 1024; // 5MB dalam byte
                if (input.files[0].size > maxSize) {
                    alert('File terlalu besar! Maksimal ukuran file adalah 5MB.');
                    input.value = ''; // Hapus file
                }
            }
        </script>
    @endpush
@endsection