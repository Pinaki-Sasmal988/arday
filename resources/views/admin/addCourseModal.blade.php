        <div id="modal-signup"
             class="add-course modal fade"
             tabindex="-1"
             role="dialog"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="px-3">
                            <div class="d-flex justify-content-center mt-2 mb-4 navbar-light">
                                <a href="index.html"
                                   class="navbar-brand"
                                   style="min-width: 0">
                                    <img class="navbar-brand-icon"
                                         src="assets/images/stack-logo-blue.svg"
                                         width="25"
                                         alt="FlowDash">
                                    <span>Stack</span>
                                </a>
                            </div>

                            <form action="#"  id="add_course_form">
                                @csrf
                                <input type="text" id="college_id_ajax" style="display:none;" value="{{$college_detail->id}}">
                                <div class="form-group">
                                    <label for="coursename">Course Name:</label>
                                    <input class="form-control"
                                           type="text"
                                           id="coursename"
                                           required=""
                                           placeholder="Course Name" />
                                </div>
                                <div class="form-group text-center">
                                    <button class="btn btn-primary"
                                            type="submit">Add Course</button>
                                </div>
                            </form>
                        </div>
                    </div> <!-- // END .modal-body -->
                </div> <!-- // END .modal-content -->
            </div> <!-- // END .modal-dialog -->
</div> <!-- // END .modal -->





        <div id="modal-signup-subcourse"
             class="add-subcourse modal fade"
             tabindex="-1"
             role="dialog"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="px-3">
                            <div class="d-flex justify-content-center mt-2 mb-4 navbar-light">
                                <a href="index.html"
                                   class="navbar-brand"
                                   style="min-width: 0">
                                    <img class="navbar-brand-icon"
                                         src="assets/images/stack-logo-blue.svg"
                                         width="25"
                                         alt="FlowDash">
                                    <span>Stack</span>
                                </a>
                            </div>

                            <form action="#" id='add_sub_course_form'>
                                @csrf
                                <div class="form-group">
                                    <label for="username">Sub-Course Name:</label>
                                    <input class="form-control"
                                           type="text"
                                           id="subcoursename"
                                           required=""
                                           placeholder="E.g Computer Science Engineering" />
                                </div>
                                <div class="form-group">
                                    <label for="duration">Enter Duration</label>
                                    <input class="form-control"
                                           type="text"
                                           id="duration"
                                           required=""
                                           placeholder="Time of Course(In years)" />
                                </div>
                                <div class="form-group">
                                    <label for="subcoursefees">Fees Per Year</label>
                                    <input class="form-control"
                                           type="text"
                                           required=""
                                           id="subcoursefees"
                                           placeholder="Fees Per Year(In Number)" />
                                </div>
                                <div class="form-group">
                                    <label for="courseofsubcourse">Course</label>
                                        <select class="form-control" id="courseofsubcourse">
                                            <option value="0" selected="true">Select Course</option>
                                            @foreach($college_courses as $course)
                                            <option value="{{$course->id}}">{{$course->course_name}}</option>
                                            @endforeach
                                        </select>
                                </div>
                                <div class="form-group text-center">
                                    <button class="btn btn-primary"
                                            type="submit" id="add_subcourse">Add Sub Course</button>
                                </div>
                            </form>
                        </div>
                    </div> <!-- // END .modal-body -->
                </div> <!-- // END .modal-content -->
            </div> <!-- // END .modal-dialog -->
</div> <!-- // END .modal -->