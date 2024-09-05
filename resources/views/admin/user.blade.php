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
                        <span class="circle"><img src="https://t4.ftcdn.net/jpg/03/83/25/83/360_F_383258331_D8imaEMl8Q3lf7EKU2Pi78Cn0R7KkW9o.jpg" alt=""></span>
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
                        <span class="circle"><img src="https://assets.clevelandclinic.org/transform/e4f517d3-8cc3-42be-ad1f-907502f9085b/person-Yawns-Office-1440494736-770x533-1_jpg" alt=""></span>
                    </div>
                    <div class="contBottom">
                        <div class="contTxt">
                            <span class="name">Melia_me</span>
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
                        <span class="circle"><img src="https://www.verywellmind.com/thmb/Eww5tSxM2eYCfxikvK2THFxRSA0=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/GettyImages-1411373323-6988f2ee3a17422084a3c7bbff5b4d4a.jpg" alt=""></span>
                    </div>
                    <div class="contBottom">
                        <div class="contTxt">
                            <span class="name">Josephine</span>
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
                        <span class="circle"><img src="https://assets.clevelandclinic.org/transform/6f260ca6-febc-4728-9f73-7d8c534552e5/person-drinking-coffee-2008302618" alt=""></span>
                    </div>
                    <div class="contBottom">
                        <div class="contTxt">
                            <span class="name">Arthurdibia</span>
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
                        <span class="circle"><img src="https://t3.ftcdn.net/jpg/03/02/88/46/360_F_302884605_actpipOdPOQHDTnFtp4zg4RtlWzhOASp.jpg" alt=""></span>
                    </div>
                    <div class="contBottom">
                        <div class="contTxt">
                            <span class="name">Paolodilo_nardo</span>
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
                        <span class="circle"><img src="https://www.shutterstock.com/image-photo/young-handsome-man-beard-wearing-600nw-1703979295.jpg" alt=""></span>
                    </div>
                    <div class="contBottom">
                        <div class="contTxt">
                            <span class="name">Gianni_mass</span>
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
                    <span class="buble"><img src="https://mp-prod-de-medialib.s3-eu-central-1.amazonaws.com/motivwelt/stockimage/poster-wassertropfen-petrol/overview/poster-wassertropfen-petrol-l.jpg" alt=""></span>
                </div>
                <div class="bottmCont">
                    <span class="description">Spain</span>
                </div>
            </div>
            <div class="cardStories">
                <div class="topCont">
                    <span class="buble"><img src="https://i.pinimg.com/236x/d0/9c/fe/d09cfe87d8bcda5476fcbed92111e9f8.jpg" alt=""></span>
                </div>
                <div class="bottmCont">
                    <span class="description">Monaco</span>
                </div>
            </div>
            <div class="cardStories">
                <div class="topCont">
                    <span class="buble"><img src="https://img.pixers.pics/pho_wat(s3:700/FO/64/96/00/95/700_FO64960095_b091401fac3fe0fef7e675f489646903.jpg,700,700,cms:2018/10/5bd1b6b8d04b8_220x50-watermark.png,over,480,650,jpg)/poster-suggestive-vie-del-mediterraneo-foto-artistiche.jpg.jpg" alt=""></span>
                </div>
                <div class="bottmCont">
                    <span class="description">Italy</span>
                </div>
            </div>
            <div class="cardStories">
                <div class="topCont">
                    <span class="buble"><img src="https://brunofabiani.wordpress.com/wp-content/uploads/2020/03/img_e9466.jpg?w=1024" alt=""></span>
                </div>
                <div class="bottmCont">
                    <span class="description">Salento</span>
                </div>
            </div>
            <div class="cardStories">
                <div class="topCont">
                    <span class="buble"><img src="https://i.pinimg.com/550x/af/6c/0c/af6c0cbbfb4601e1fb151e4718dea564.jpg" alt=""></span>
                </div>
                <div class="bottmCont">
                    <span class="description">Japan</span>
                </div>
            </div>
            <div class="cardStories">
                <div class="topCont">
                    <span class="buble"><img src="https://ilfotografo.it/wp-content/uploads/2019/01/evening-1777352_960_720.jpg" alt=""></span>
                </div>
                <div class="bottmCont">
                    <span class="description">Greece</span>
                </div>
            </div>
            <div class="cardStories">
                <div class="topCont">
                    <span class="buble"><img src="https://media-assets.ad-italia.it/photos/60f13ecb7418b0b14e63efa6/master/w_1600%2Cc_limit/photo6.jpg" alt=""></span>
                </div>
                <div class="bottmCont">
                    <span class="description">Norwey</span>
                </div>
            </div>
            <div class="cardStories">
                <div class="topCont">
                    <span class="buble"><img src="https://www.turismoitalianews.it/images/stories/piemonte/Monferrato02_PhConsorzioPromozioneTuristica.jpg" alt=""></span>
                </div>
                <div class="bottmCont">
                    <span class="description">Florence</span>
                </div>
            </div>
            <div class="cardStories">
                <div class="topCont">
                    <span class="buble"><img src="https://www.focusjunior.it/content/uploads/site_stored/imgs/0003/049/3nevevenezia.jpg" alt=""></span>
                </div>
                <div class="bottmCont">
                    <span class="description">Thailand</span>
                </div>
            </div>
            <div class="cardStories">
                <div class="topCont">
                    <span class="buble"><img src="https://siviaggia.it/wp-content/uploads/sites/2/2023/08/Charco-Azul-Chulilla.jpg?w=786&strip=all&quality=90" alt=""></span>
                </div>
                <div class="bottmCont">
                    <span class="description">France</span>
                </div>
            </div>
            <div class="cardStories">
                <div class="topCont">
                    <span class="buble"><img src="https://bonkaday.com/wp-content/uploads/2014/06/Immagini-suggestive-17.jpg" alt=""></span>
                </div>
                <div class="bottmCont">
                    <span class="description">Germany</span>
                </div>
            </div>
            <div class="cardStories">
                <div class="topCont">
                    <span class="buble"><img src="https://www.dailynautica.com/wp-content/uploads/2015/06/Cala-R.-Copertina.jpg" alt=""></span>
                </div>
                <div class="bottmCont">
                    <span class="description">Creta</span>
                </div>
            </div>
            <div class="cardStories">
                <div class="topCont">
                    <span class="buble"><img src="https://www.nationalgeographic.it/upload/ngi-hero/ld_covid_20200424-1.adapt_.1900.1.jpg" alt=""></span>
                </div>
                <div class="bottmCont">
                    <span class="description">Maldives</span>
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
            <div class="cell"><img src="https://www.travelforbusiness.it/wp-content/uploads/2020/12/aeroplane-aircraft-airplane-1792072.jpg" alt=""></div>
            <div class="cell"><img src="https://www.bnesim.com/wp-content/uploads/2023/12/KW-why-travel-is-important.jpg" alt=""></div>
            <div class="cell"><img src="https://www.scti.co.nz/-/media/project/scti/nz/images/travel-advice/benefits-of-travelling/travel-makes-you-richer-couple-hiking-900x675.jpg" alt=""></div>
            <div class="cell"><img src="https://container-news.com/wp-content/uploads/2021/04/Picture-1.jpg" alt=""></div>
            <div class="cell"><img src="https://www.bsr.org/images/heroes/bsr-travel-hero..jpg" alt=""></div>
            <div class="cell"><img src="https://media.cntraveler.com/photos/5e74f9de2e6ca30009d1d4fa/16:9/w_2560%2Cc_limit/Argentina-GettyImages-1146497849.jpg" alt=""></div>
            <div class="cell"><img src="https://wlassets.motoguzzi.com/wlassets/moto-guzzi/master/Range/V85/PDP/V85_TT_Travel/gallery/MG_V85TT_Travel_gallery_1920x1440_4/original/MG_V85TT_Travel_gallery_1920x1440_4.jpg?1710928025405" alt=""></div>
            <div class="cell"><img src="https://images.pexels.com/photos/2265876/pexels-photo-2265876.jpeg?cs=srgb&dl=pexels-vince-2265876.jpg&fm=jpg" alt=""></div>
            <div class="cell"><img src="https://as2.ftcdn.net/v2/jpg/02/10/62/87/1000_F_210628780_W31xqDvUlwkeMlJ6cjCfiet5pzI4gSM3.jpg" alt=""></div>
            <div class="cell"><img src="https://www.travelonart.com/wp-content/uploads/2022/03/cover_travel.jpg" alt=""></div>
            <div class="cell"><img src="https://i0.wp.com/www.4utravel.it/wp-content/uploads/2023/10/4utravel-estero-mondo.jpg?resize=1024%2C901&ssl=1" alt=""></div>
        </div>
    </div>
@endsection
