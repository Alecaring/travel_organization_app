@extends('layouts.admin')

@section('content')
    <div class="contTopLinks">
        <div class="contLeftUser">
            <span>
                alessio.is.there
            </span>
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-chevron-down" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                </svg>
            </span>

        </div>
        <div class="contRightUser">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                    class="bi bi-database-fill-check" viewBox="0 0 16 16">
                    <path
                        d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514M8 1c-1.573 0-3.022.289-4.096.777C2.875 2.245 2 2.993 2 4s.875 1.755 1.904 2.223C4.978 6.711 6.427 7 8 7s3.022-.289 4.096-.777C13.125 5.755 14 5.007 14 4s-.875-1.755-1.904-2.223C11.022 1.289 9.573 1 8 1" />
                    <path
                        d="M2 7v-.839c.457.432 1.004.751 1.49.972C4.722 7.693 6.318 8 8 8s3.278-.307 4.51-.867c.486-.22 1.033-.54 1.49-.972V7c0 .424-.155.802-.411 1.133a4.51 4.51 0 0 0-4.815 1.843A12 12 0 0 1 8 10c-1.573 0-3.022-.289-4.096-.777C2.875 8.755 2 8.007 2 7m6.257 3.998L8 11c-1.682 0-3.278-.307-4.51-.867-.486-.22-1.033-.54-1.49-.972V10c0 1.007.875 1.755 1.904 2.223C4.978 12.711 6.427 13 8 13h.027a4.55 4.55 0 0 1 .23-2.002m-.002 3L8 14c-1.682 0-3.278-.307-4.51-.867-.486-.22-1.033-.54-1.49-.972V13c0 1.007.875 1.755 1.904 2.223C4.978 15.711 6.427 16 8 16c.536 0 1.058-.034 1.555-.097a4.5 4.5 0 0 1-1.3-1.905" />
                </svg>
            </span>
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                    class="bi bi-plus-square" viewBox="0 0 16 16">
                    <path
                        d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                    <path
                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                </svg>
            </span>
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                </svg>
            </span>
        </div>
    </div>


    <div class="contUserInfo">
        <div class="contTop">
            <div class="cellCircle d-flex align-items-center justify-content-center">
                <span class="circle"><img src="https://www.mckinsey.com/it/~/media/mckinsey/our%20people/enrico%20lucchinetti/enrico_lucchinetti_fc_mask_profile_1536x1152.jpg?cq=50&mw=480&car=1:1&cpy=Center"
                    alt=""></span>
            </div>
            <div class="contFollowersUser">
                <div class="cell3">
                    <span class="count">51</span>
                    <span class="name">post</span>
                </div>
                <div class="cell3">
                    <span class="count">2.289</span>
                    <span class="name">followers</span>
                </div>
                <div class="cell3">
                    <span class="count">950</span>
                    <span class="name">seguiti</span>
                </div>
            </div>
        </div>
        <div class="contBottom">
            <div class="bio">
                <span class="d-block name pb-2">Alessio Caringella</span>
                <span class="d-block someting">Uomo dai grandi sogni</span>
                <span class="d-block nation">Italy</span>
                <span class="d-block zodiac">Gemelli</span>
            </div>
            <div class="actions">
                <div class="left">
                    <button>Modifica</button>
                    <button>Condividi profilo</button>
                </div>
                <div class="right">i</div>
            </div>
        </div>
    </div>

    <div class="contUserSuggest">
        <div class="contTop">
            <span class="first">Persone suggerite</span>
            <span class="last text-primary">Mostra tutto</span>
        </div>
        <div class="contBottom">
            <div class="contSlider">
                <div class="cardSuggest">
                    <span class="delectBtn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                          </svg>
                    </span>

                    <div class="containerPhoto">
                        <span class="circle"><img src="https://www.mckinsey.com/it/~/media/mckinsey/our%20people/enrico%20lucchinetti/enrico_lucchinetti_fc_mask_profile_1536x1152.jpg?cq=50&mw=480&car=1:1&cpy=Center" alt=""></span>
                    </div>
                    <div class="contBottom">
                        <div class="contTxt">
                            <span class="name">cris</span>
                            <span class="followers">Followers: fracarrier + altri 17</span>
                        </div>
                        <div class="contBtn">
                            <button class="ms_btn">Segui</button>
                        </div>
                    </div>
                </div>
                <div class="cardSuggest">
                    <span class="delectBtn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                          </svg>
                    </span>

                    <div class="containerPhoto">
                        <span class="circle"><img src="https://www.mckinsey.com/it/~/media/mckinsey/our%20people/enrico%20lucchinetti/enrico_lucchinetti_fc_mask_profile_1536x1152.jpg?cq=50&mw=480&car=1:1&cpy=Center" alt=""></span>
                    </div>
                    <div class="contBottom">
                        <div class="contTxt">
                            <span class="name">cris</span>
                            <span class="followers">Followers: fracarrier + altri 17</span>
                        </div>
                        <div class="contBtn">
                            <button class="ms_btn">Segui</button>
                        </div>
                    </div>
                </div>
                <div class="cardSuggest">
                    <span class="delectBtn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                          </svg>
                    </span>

                    <div class="containerPhoto">
                        <span class="circle"><img src="https://www.mckinsey.com/it/~/media/mckinsey/our%20people/enrico%20lucchinetti/enrico_lucchinetti_fc_mask_profile_1536x1152.jpg?cq=50&mw=480&car=1:1&cpy=Center" alt=""></span>
                    </div>
                    <div class="contBottom">
                        <div class="contTxt">
                            <span class="name">cris</span>
                            <span class="followers">Followers: fracarrier + altri 17</span>
                        </div>
                        <div class="contBtn">
                            <button class="ms_btn">Segui</button>
                        </div>
                    </div>
                </div>
                <div class="cardSuggest">
                    <span class="delectBtn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                          </svg>
                    </span>

                    <div class="containerPhoto">
                        <span class="circle"><img src="https://www.mckinsey.com/it/~/media/mckinsey/our%20people/enrico%20lucchinetti/enrico_lucchinetti_fc_mask_profile_1536x1152.jpg?cq=50&mw=480&car=1:1&cpy=Center" alt=""></span>
                    </div>
                    <div class="contBottom">
                        <div class="contTxt">
                            <span class="name">cris</span>
                            <span class="followers">Followers: fracarrier + altri 17</span>
                        </div>
                        <div class="contBtn">
                            <button class="ms_btn">Segui</button>
                        </div>
                    </div>
                </div>
                <div class="cardSuggest">
                    <span class="delectBtn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                          </svg>
                    </span>

                    <div class="containerPhoto">
                        <span class="circle"><img src="https://www.mckinsey.com/it/~/media/mckinsey/our%20people/enrico%20lucchinetti/enrico_lucchinetti_fc_mask_profile_1536x1152.jpg?cq=50&mw=480&car=1:1&cpy=Center" alt=""></span>
                    </div>
                    <div class="contBottom">
                        <div class="contTxt">
                            <span class="name">cris</span>
                            <span class="followers">Followers: fracarrier + altri 17</span>
                        </div>
                        <div class="contBtn">
                            <button class="ms_btn">Segui</button>
                        </div>
                    </div>
                </div>
                <div class="cardSuggest">
                    <span class="delectBtn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                          </svg>
                    </span>

                    <div class="containerPhoto">
                        <span class="circle"><img src="https://www.mckinsey.com/it/~/media/mckinsey/our%20people/enrico%20lucchinetti/enrico_lucchinetti_fc_mask_profile_1536x1152.jpg?cq=50&mw=480&car=1:1&cpy=Center" alt=""></span>
                    </div>
                    <div class="contBottom">
                        <div class="contTxt">
                            <span class="name">cris</span>
                            <span class="followers">Followers: fracarrier + altri 17</span>
                        </div>
                        <div class="contBtn">
                            <button class="ms_btn">Segui</button>
                        </div>
                    </div>
                </div>
                <div class="cardSuggest">
                    <span class="delectBtn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                          </svg>
                    </span>

                    <div class="containerPhoto">
                        <span class="circle"><img src="https://www.mckinsey.com/it/~/media/mckinsey/our%20people/enrico%20lucchinetti/enrico_lucchinetti_fc_mask_profile_1536x1152.jpg?cq=50&mw=480&car=1:1&cpy=Center" alt=""></span>
                    </div>
                    <div class="contBottom">
                        <div class="contTxt">
                            <span class="name">cris</span>
                            <span class="followers">Followers: fracarrier + altri 17</span>
                        </div>
                        <div class="contBtn">
                            <button class="ms_btn">Segui</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="evidentStory">
        <div class="contSlideer">
            <div class="cardStories">
                <div class="topCont">
                    <span class="buble"></span>
                </div>
                <div class="bottmCont">
                    <span class="description">Spain</span>
                </div>
            </div>
            <div class="cardStories">
                <div class="topCont">
                    <span class="buble"></span>
                </div>
                <div class="bottmCont">
                    <span class="description">Spain</span>
                </div>
            </div>
            <div class="cardStories">
                <div class="topCont">
                    <span class="buble"></span>
                </div>
                <div class="bottmCont">
                    <span class="description">Spain</span>
                </div>
            </div>
            <div class="cardStories">
                <div class="topCont">
                    <span class="buble"></span>
                </div>
                <div class="bottmCont">
                    <span class="description">Spain</span>
                </div>
            </div>
            <div class="cardStories">
                <div class="topCont">
                    <span class="buble"></span>
                </div>
                <div class="bottmCont">
                    <span class="description">Spain</span>
                </div>
            </div>
            <div class="cardStories">
                <div class="topCont">
                    <span class="buble"></span>
                </div>
                <div class="bottmCont">
                    <span class="description">Spain</span>
                </div>
            </div>
            <div class="cardStories">
                <div class="topCont">
                    <span class="buble"></span>
                </div>
                <div class="bottmCont">
                    <span class="description">Spain</span>
                </div>
            </div>
            <div class="cardStories">
                <div class="topCont">
                    <span class="buble"></span>
                </div>
                <div class="bottmCont">
                    <span class="description">Spain</span>
                </div>
            </div>
            <div class="cardStories">
                <div class="topCont">
                    <span class="buble"></span>
                </div>
                <div class="bottmCont">
                    <span class="description">Spain</span>
                </div>
            </div>
            <div class="cardStories">
                <div class="topCont">
                    <span class="buble"></span>
                </div>
                <div class="bottmCont">
                    <span class="description">Spain</span>
                </div>
            </div>
            <div class="cardStories">
                <div class="topCont">
                    <span class="buble"></span>
                </div>
                <div class="bottmCont">
                    <span class="description">Spain</span>
                </div>
            </div>
            <div class="cardStories">
                <div class="topCont">
                    <span class="buble"></span>
                </div>
                <div class="bottmCont">
                    <span class="description">Spain</span>
                </div>
            </div>
            <div class="cardStories">
                <div class="topCont">
                    <span class="buble"></span>
                </div>
                <div class="bottmCont">
                    <span class="description">Spain</span>
                </div>
            </div>
            <div class="cardStories">
                <div class="topCont">
                    <span class="buble"></span>
                </div>
                <div class="bottmCont">
                    <span class="description">Spain</span>
                </div>
            </div>
        </div>
    </div>

    <div class="contPosts">
        <div class="header">
            <div class="div3">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-grid-3x3-gap-fill" viewBox="0 0 16 16">
                    <path d="M1 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zM1 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zM1 12a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1z"/>
                  </svg>
            </div>
            <div class="div3">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-camera-video" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z"/>
                  </svg>
            </div>
            <div class="div3">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"/>
                  </svg>
            </div>
        </div>

        <div class="main">
            <div class="cell"></div>
            <div class="cell"></div>
            <div class="cell"></div>
            <div class="cell"></div>
            <div class="cell"></div>
            <div class="cell"></div>
            <div class="cell"></div>
            <div class="cell"></div>
            <div class="cell"></div>
            <div class="cell"></div>
            <div class="cell"></div>
        </div>
    </div>
@endsection
