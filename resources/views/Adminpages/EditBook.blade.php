@extends('layouts.header_footer_navbar')
@section('content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        @if (Session::get('success'))
        <div class="alert alert-primary">
            {{Session::get('success')}}
        </div>
    @endif
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Edit Book</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active"><a href="edit-professor.html">Book</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Book</a></li>
                </ol>
            </div>
        </div>
        
        <div class="row">
            <div class="col-xl-12 col-xxl-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Basic Info</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{route('store-update')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <input type="hidden" name="id" value="{{$info->id}}">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Author Name</label>
                                        <input type="text" name="author_name" class="form-control" value="{{$info->Author_Name}}">
                                         <span style="color: red">@error('author_name'){{$message}}@enderror</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Book Name <strong style="color: green">& </strong> Release year</label>
                                        <input type="text" name="book_name" class="form-control" value="{{$info->Book_Name}}">
                                        <span style="color: red"> @error('book_name'){{$message}} @enderror</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Catagories</label>
                                        <select class="form-control" name="Catagory" value="{{$info->Catagory}}">
                                            <option value="AQEEDAH">AQEEDAH</option>
                                            <option value="SHIRK">SHIRK</option>
                                            <option value="QURAN">QURAN</option>
                                            <option value="HADITH">HADITH</option>
                                            <option value="PROPHETS">PROPHETS</option>
                                            <option value="TAFSIR">TAFSIR</option>
                                            <option value="TAWHEED">TAWHEED</option>
                                            <option value="ALLAH">ALLAH</option>
                                            <option value="ANGELS">ANGELS</option>
                                            <option value="DUA-ZIKR">DUA-ZIKR</option>
                                            <option value="JINN">JINN</option>
                                            <option value="SUNNAH">SUNNAH</option>
                                            <option value="BIDAH">BIDAH</option>
                                            <option value="BIOGRAPHIES">BIOGRAPHIES</option>
                                            <option value="DEATH-GRAVE">DEATH-GRAVE</option>
                                            <option value="FIQH">FIQH</option>
                                            <option value="NEW-MUSLIMS">NEW MUSLIMS</option>
                                            <option value="Non-Muslims">Non-Muslims</option>
                                            <option value="HEALING">HEALING</option>                           
                                            <option value="HEART">HEART</option>                               
                                            <option value="KUFAR-Celebrations">KUFAR-Celebrations</option>     
                                            <option value="Qayamat-HEREAFTER">Qayamat-HEREAFTER</option>       
                                            <option value="RAMADHAN">RAMADHAN</option>                    
                                            <option value="RUQYA">RUQYA</option>                            
                                            <option value="SALAF">SALAF</option>                            
                                            <option value="SINS">SINS</option>
                                            <option value="ISLAM-4-KIDs">ISLAM-4-KIDs</option>
                                            <option value="ISLAMI-SHARIA-WILL">ISLAMI-SHARIA-WILL</option>
                                            <option value="PROPHET-SAWS">PROPHETSAWS</option>
                                            <option value="SACRED-MONTHS">SACRED MONTHS</option>
                                            <option value="ADVICE">ADVICE</option>  
                                            <option value="AWLIYAH-ALLAH">AWLIYAH-ALLAH</option>
                                            <option value="BENEFITS">BENEFITS</option>
                                            <option value="CALAMITIES">CALAMITIES</option>
                                            <option value="CHILDREN-YOUTH">CHILDREN-YOUTH</option>
                                            <option value="CURRENT-AFFAIRS">CURRENT AFFAIRS</option>
                                            <option value="DAJJAL">DAJJAL</option>
                                            <option value="DAWAH">DAWAH</option>
                                            <option value="DESIRES">DESIRES</option>
                                            <option value="ENVY">ENVY</option>
                                            <option value="ETHICS-MANNERS">ETHICS-MANNERS</option>
                                            <option value="EVIL">EVIL</option>
                                            <option value="FATAWA">FATAWA</option> 
                                            <option value="FITNAH">FITNAH</option>
                                            <option value="HAJJ-UMRAH">HAJJ-UMRAH</option>
                                            <option value="HALAL-o-HARAM">HALAL-o-HARAM</option>
                                            <option value="HARRAM-KHUTABHs">HARRAM KHUTABHs</option>
                                            <option value="HIJAB">HIJAB</option>
                                            <option value="HISTORY">HISTORY</option>
                                            <option value="ILM-ULAMA">ILM-ULAMA</option>
                                            <option value="ISLAM">ISLAM</option>
                                            <option value="ISLAMIC HISTORY">ISLAMIC HISTORY</option>
                                            <option value="JANAZAH">JANAZAH</option>
                                            <option value="KUFR">KUFR</option>
                                            <option value="MODESTY">MODESTY</option>
                                            <option value="MARRIAGE-DIVORCE">MARRIAGE-DIVORCE</option>
                                            <option value="MORALS">MORALS</option>                                           
                                            <option value="PARENTS">PARENTS</option>
                                            <option value="PRAYERS">PRAYERS</option>
                                            <option value="PROPHET'S-FAMILY">PROPHET'S FAMILY</option>                                            
                                            <option value="RACISM-INJUSTICE">RACISM - INJUSTICE</option>
                                            <option value="RELATIONS">RELATIONS</option>
                                            <option value="RELIGIONS">RELIGIONS</option>
                                            <option value="REPENTANCE">REPENTANCE</option>
                                            <option value="RIGHTS">RIGHTS</option>
                                                         <option value="SAHABAH">SAHABAH</option>
                                                         <option value="SECTS">SECTS</option>
                                            <option value="SEERAH">SEERAH</option>
                                            <option value="SHARIA">SHARIA</option>
                                            <option value="SHAYTAAN">SHAYTAAN</option>
                                            <option value="SISTERS">SISTERS</option>
                                            <option value="SOUL">SOUL</option>
                                            <option value="SUFISM">SUFISM</option>
                                            <option value="TERRORISM">TERRORISM</option>
                                            <option value="WARNINGS">WARNINGS</option>
                                            <option value="WASEELA">WASEELA</option>
                                            <option value="ZAKAT-SADAQAH">ZAKAT-SADAQAH</option>
                                        </select>
                                        <span style="color: red"> @error('Catagory'){{$message}} @enderror</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Language</label>
                                        <select class="form-control" name="language" value="{{$info->Language}}">
                                            <option value="Luganda">Luganda</option>
                                            <option value="English">English</option>
                                            <option value="اللغة العربية">اللغة العربية</option>
                                        </select>
                                        <span style="color: red">@error('language'){{$message}} @enderror</span>
                                    </div>
                                </div>
                               
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Format</label>
                                        <select class="form-control" name="format" value="{{$info->Format}}">
                                            <option value="pdf">pdf</option>
                                            <option value="doc">word.doc</option> 
                                        </select>
                                        <span style="color: red">@error('format'){{$message}} @enderror</span>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Number of pages</label>
                                        <input type="text" name="pages" class="form-control" value="{{$info->pages}}">
                                        <span style="color: red">@error('pages'){{$message}} @enderror</span>
                                    </div>
                                </div>
                               
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Edition </label>
                                        <select class="form-control" name="Edition" value="{{$info->Edition}}">
                                            <option value="First Edition">First Edition</option>
                                            <option value="Second Edition">Second Edition</option>
                                            <option value="Third Edition">Third Edition</option> 
                                            <option value="Fourth Edition">Fourth Edition</option>
                                            <option value="Fifth Edition">Fifth Edition</option>
                                            <option value="Sixth Edition">Sixth Edition</option>
                                            <option value="Seventh Edition">Seventh Edition</option>
                                            <option value="Eight Edition">Eight Edition</option>
                                            <option value="Ninth Edition">Ninth Edition</option>
                                        </select>
                                        <span style="color: red">@error('Edition'){{$message}} @enderror</span>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Topics</label>
                                        <input type="text" name="Topics" class="form-control" value="{{$info->Topics}}">
                                         <span style="color: red">@error('Topics'){{$message}}@enderror</span>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Summary</label>
                                        <input type="text" name="Summary" class="form-control" value="{{$info->Summary}}">
                                         <span style="color: red">@error('Summary'){{$message}}@enderror</span>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group fallback w-100">
                                     <strong>Upload the Book Image :</strong>  <input type="file" name="Book_image" class="dropify" data-default-file="" value="{{old('Book_image')}}">
                                     <span style="color: red">@error('Book_image'){{$message}} @enderror</span>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group fallback w-100">
                                     <strong>Upload Book pdf / docx :</strong>  <input type="file" name="Book_pdf" class="dropify" data-default-file="" value="{{old('Book_pdf')}}">
                                     <span style="color: red">@error('Book_pdf'){{$message}} @enderror</span>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="submit" class="btn btn-light">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>

@endsection