<!-- Start: Staff Picks -->
<section class="team staff-picks">
    <div class="container">
        <div class="center-content">
            <h2 class="section-title">Most Recent Uploads</h2>
            <span class="underline center"></span>
            <p class="lead" style="color: yellow">All the recently uploaded islamic-books and pdfs in different languages from Taqwa library collection are shown here.</p>
        </div>
       
        <div class="team-list">   
            @foreach ($data as $info)           
            <div class="team-member">
                <figure>
                    <img class="image-size" src="{{'/public/BookImage/'.$info->Book_Image}}" alt="Staff Pick" />
                </figure>
                <div class="content-block">
                    <div class="member-info">
                        <div class="member-thumb">
                            <img class="staff_pic_image" src="{{'/public/BookImage/'.$info->Book_Image}}" alt="Katherine">
                        </div>
                        <div class="member-content">
                            <span class="designation">{{$info->Author_Name}}</span>
                            <h4>{{$info->Book_Name}}</h4>
                            <ul class="social">
                                <li>
                                    <a href="javascript:void()" >
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void()" >
                                        <i class="fa fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void()" >
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void()" >
                                        <i class="fa fa-skype"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <p>Go ahead explore , read, access and download this book freely....</p>
                        <a class="btn btn-primary" href="{{'final-page/'.$info->id}}">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        
        </div>
       
    </div>
    </section>
    <!-- End: Staff Picks -->