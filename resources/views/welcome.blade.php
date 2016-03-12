@extends('layouts.master')

@section('content')
            <!-- HEADING PAGE -->
        <section class="awe-parallax page-heading-demo">
            <div class="awe-overlay"></div>
            <div class="container text-center">
                <div class="heading-content">
                    <h2 class="text-uppercase">Travel in style</h2>
                    <p>in my own style</p>
                </div>
            </div>
        </section>
        <!-- END / HEADING PAGE -->


        <!-- SEARCH TABS -->
        <section>
            <div class="container">
                <div class="awe-search-tabs tabs">
                    <ul>
                        <li>
                            <a href="#awe-search-tabs-4">
                                <i class="awe-icon awe-icon-bus"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="awe-search-tabs__content tabs__content">
                        <div id="awe-search-tabs-3" class="search-flight">
                            <h2>Search Bus</h2>
                            <form>
                                <div class="form-group">
                                    <div class="form-elements">
                                        <label>From</label>
                                        <div class="form-item">
                                            <i class="awe-icon awe-icon-marker-1"></i>
                                            <input type="text" value="Ho Chi Minh, Hanoi, Vietnam">
                                        </div>
                                    </div>
                                    <div class="form-elements">
                                        <label>To</label>
                                        <div class="form-item">
                                            <i class="awe-icon awe-icon-marker-1"></i>
                                            <input type="text" value="Ankara, Turkey">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-elements">
                                        <label>Depart on</label>
                                        <div class="form-item">
                                            <i class="awe-icon awe-icon-calendar"></i>
                                            <input type="text" class="awe-calendar" value="Check in">
                                        </div>
                                    </div>
                                    <div class="form-elements">
                                        <label>Return on</label>
                                        <div class="form-item">
                                            <i class="awe-icon awe-icon-calendar"></i>
                                            <input type="text" class="awe-calendar" value="Check out">
                                        </div>
                                    </div>
                                    <div class="form-elements">
                                        <label>Adult</label>
                                        <div class="form-item">
                                            <select class="awe-select">
                                                <option>0</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                        </div>
                                        <span>12 yo and above</span>
                                    </div>
                                    <div class="form-elements">
                                        <label>Kids</label>
                                        <div class="form-item">
                                            <select class="awe-select">
                                                <option>0</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                        </div>
                                        <span>0-11 yo</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-elements">
                                        <label>Budget</label>
                                        <div class="form-item">
                                            <select class="awe-select">
                                                <option>All types</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input type="submit" value="Find My Flight">
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- END / SEARCH TABS -->
@endsection