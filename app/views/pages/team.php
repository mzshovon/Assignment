<?php
require_once APPROOT . '/views/inc/teamPage/head.php';

?>
<body>
<div class="wrapper">
    <?php
    require_once APPROOT . '/views/inc/header.php';

    ?>

    <div class="p-2 main" data-page-name="p-2__as__writers-page">
        <div class="l-0">
            <div class="c-20">
                <ol class="c-20__ol" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                    <li class="c-20__li" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a class="c-20__a" href="index.html" itemscope="" itemtype="http://schema.org/Thing"
                           itemprop="item"><span itemprop="name">Home</span></a>
                        <meta itemprop="position" content="1">
                    </li>
                    <li class="c-20__li" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <span itemprop="name">Our Writers Team</span>
                        <meta itemprop="position" content="2">
                    </li>
                </ol>
            </div>
            <div class="p-2__h"><h1 class="h--md">Our Writers Team</h1>
                <div class="p-2__dd">
                    <div class="c-23 dropdown">
                        <button type="button" class="c-23__b dropdown-toggle" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="true" id="writers-menu__mobile"><span
                                class="badge"></span> <span class="caret"></span></button>
                        <ul id="writers-menu-children__mobile" class="c-23__c dropdown-menu"
                            aria-labelledby="writers-menu__mobile"></ul>
                    </div>
                </div>
            </div>
            <div class="p-2__pl">
                <div class="p-2__f">
                    <div class="p-2__f-t">Sort by</div>
                    <div class="p-2__f-g">
                        <div class="btn-group" id="order-by-attribute-buttons">
                            <button class="btn btn-primary active" type="button" data-order-by="rating">Rating</button>
                            <button class="btn btn-primary" type="button" data-order-by="orders">Orders</button>
                            <button class="btn btn-primary" type="button" data-order-by="completion">Completion</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-2__m">
                <div class="p-2__s">
                    <ul id="writers-menu" class="c-22">
                        <li class="c-22__li is--active" data-subject="All writers" data-subject-id=""><span
                                class="c-22__a" title="All writers"><span class="c-22__a-t">All writers</span> <span
                                    class="c-22__b">272</span></span></li>
                        <li class="c-22__li" data-subject="Agriculture" data-subject-id="101"><span class="c-22__a"
                                                                                                    title="Agriculture"><span
                                    class="c-22__a-t">Agriculture</span> <span class="c-22__b">137</span></span></li>
                        <li class="c-22__li" data-subject="Architecture" data-subject-id="102"><span class="c-22__a"
                                                                                                     title="Architecture"><span
                                    class="c-22__a-t">Architecture</span> <span class="c-22__b">148</span></span></li>
                        <li class="c-22__li" data-subject="Biological Sciences" data-subject-id="103"><span
                                class="c-22__a" title="Biological Sciences"><span
                                    class="c-22__a-t">Biological Sciences</span> <span class="c-22__b">229</span></span>
                        </li>
                        <li class="c-22__li" data-subject="Business and Finance" data-subject-id="104"><span
                                class="c-22__a" title="Business and Finance"><span class="c-22__a-t">Business and Finance</span> <span
                                    class="c-22__b">269</span></span></li>
                        <li class="c-22__li" data-subject="Communications and Media" data-subject-id="105"><span
                                class="c-22__a" title="Communications and Media"><span class="c-22__a-t">Communications and Media</span> <span
                                    class="c-22__b">246</span></span></li>
                        <li class="c-22__li" data-subject="Computer Sciences" data-subject-id="106"><span
                                class="c-22__a" title="Computer Sciences"><span
                                    class="c-22__a-t">Computer Sciences</span> <span class="c-22__b">231</span></span></li>
                        <li class="c-22__li" data-subject="Education" data-subject-id="107"><span class="c-22__a"
                                                                                                  title="Education"><span
                                    class="c-22__a-t">Education</span> <span class="c-22__b">251</span></span></li>
                        <li class="c-22__li" data-subject="Engineering" data-subject-id="108"><span class="c-22__a"
                                                                                                    title="Engineering"><span
                                    class="c-22__a-t">Engineering</span> <span class="c-22__b">198</span></span></li>
                        <li class="c-22__li" data-subject="Legal" data-subject-id="109"><span class="c-22__a"
                                                                                              title="Legal"><span
                                    class="c-22__a-t">Legal</span> <span class="c-22__b">258</span></span></li>
                        <li class="c-22__li" data-subject="Liberal Arts and Humanities" data-subject-id="110"><span
                                class="c-22__a" title="Liberal Arts and Humanities"><span class="c-22__a-t">Liberal Arts and Humanities</span> <span
                                    class="c-22__b">271</span></span></li>
                        <li class="c-22__li" data-subject="Medicine and Health" data-subject-id="111"><span
                                class="c-22__a" title="Medicine and Health"><span
                                    class="c-22__a-t">Medicine and Health</span> <span class="c-22__b">259</span></span>
                        </li>
                        <li class="c-22__li" data-subject="Physical Sciences" data-subject-id="112"><span
                                class="c-22__a" title="Physical Sciences"><span
                                    class="c-22__a-t">Physical Sciences</span> <span class="c-22__b">245</span></span></li>
                        <li class="c-22__li" data-subject="Psychology" data-subject-id="113"><span class="c-22__a"
                                                                                                   title="Psychology"><span
                                    class="c-22__a-t">Psychology</span> <span class="c-22__b">250</span></span></li>
                        <li class="c-22__li" data-subject="Other" data-subject-id="114"><span class="c-22__a"
                                                                                              title="Other"><span
                                    class="c-22__a-t">Other</span> <span class="c-22__b">265</span></span></li>
                    </ul>
                </div>
                <div class="p-2__c">
                    <ul id="writers-list" class="c-24">
                        <li class="c-24__li" data-writer-id="11510">
                            <div class="c-24__i">
                                <div class="c-24__wr"><span data-link="writer/11510.html" class="h-l"><button
                                            type="submit" class="button-as-link"><span
                                                class="c-24__wr-av avatar--medium"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAED0lEQVRYhbWYz1MbZRjHP++7v5JsIGAU5FedasUpU+nBGe3JFg969GhP2qMHOTD9N5RxBg8eHU8e7U0PDuKpOuOBDtOOWIsyFBpCfkGWkN1k18MmJUAT9l3ge9vJ883z3X32ffb7PIKYKFQcA7gO3ADeBK4C062fHwCPgL+B+8ByNmN7cfIIRVESmAFmgY8Vc90DFoDFbMb2o5IiCSxUHAHcBH4AhhWFHUcOuA0sZTN2cFrwqQILFWcM+Am4dkZhx7ECfJTN2Ju9gnoKLFScW8AvgDw/XUfgAx9kM/ZSt4CuiQsVZw5Y7BVzDpDAr61cXQNOoFBx7gLzF6XqBZjvJvJEiVtlXbxoRV1w63i5jwhsHYh1YpTV930ajSZCCgxdjyvQBy5lM/bTEwJbrWQFmFL5x2rVYbfqUKsdEARh1zBNg750mkx/GimV73UFmG63oE72TVVxz3J5nm3vsL9fey4OwHU9CsUST7dy+H7kntzGNeD99oWA51+ITRSacLPZZO2/jVPjLNNkbHRY9UnmgNFsxvbbrBkVcZ7XIL9TjBRbd12KpYqKOFpaZuCwxLMq7O38DlVnP3J8ZXfvyCsQEV8AiJYrcVWYT/5dx/fVEk6MjWBZphIHMCWhZYqMIAiUxUH4zsbAtCT0c5EhhEAIJZcW8tTbDcANSWg2lSClusA4HOCKJHTCStA0TTmTHoMDTEkObXok7O5VcV11954vlJQ5wHXlFyOOuLPwJOGAExmmacRKZBqxDMSyJJy+IsNOJeMkwrZTcWgPJeFoGBmappFIWEpZhBBxb+yxJJxblTAyPERf2o4Ua+g6r02MxrFdAPclsKzK0jRJKuITSSQt9PgG9oFsTfz3VJlpOxWptw3098cRBvBjNmN77ee+oMoWQtDX17vMlmXGMQhtfAOHdmuR0CQq4bRvslDbrHQiR2twkwCtXcntuP92Afikvb/pPFpLhAPLqfAaDbbzBUrl3Z5xB/U6m1s5agcHKuJWgN/aF0pjp+t5lMoVqlUHVYOcTFgMDmZIJXuefh+Y6NzXRBrcXdejWCor2fxusCyTlwYHujXu3oN7h8g5YD4IAgrFMuVK71LGQSqZYGjo5c5WNZfN2F8fj+t6zPLl6t2trdyXtYP6uYtrQ9M0xkdfxTD0F4qDHiuOVwbSX2madgdQH0AiotlsBoVi6bNu4iDCAvPR4/W3q87+z77vj5ynOCnlVtpOfXj1yqWenSNSJ11d2xCe1/jU2a8tBEHQdxZhQog9O5WcNQz9+8nL42dfAXdidW1Dd73GHbfufu41Gu+ocA1d/9O0zG9NQ/9u8vJ4Iyov9rforycbScs03pWa9p4U4g0EkwIxBRAQPCRg1Q+Cf/xm8/e66/3x1uvjtTh5/ge5WGIs1koIzAAAAABJRU5ErkJggg=="
                                                    data-bg="linear-gradient(#fff, #ccc)"
                                                    data-src="https://assets.essaypro.com/11510/b81e6ae9ae8b49c8cf71623423a38f09"
                                                    alt="Elite Writer" class="avatar--medium__image lazy"> </span><span
                                                class="c-24__wr-n">Elite Writer <span
                                                    class="c-24__wr-s true"></span></span></button></span>
                                    <div class="c-24__wr-d">An intelligent, smart and dedicated professional essay
                                        writer.
                                    </div>
                                </div>
                                <div class="c-24__st">
                                    <div class="c-24__st-li">
                                        <div class="c-24__st-v">6090</div>
                                        <div class="c-24__st-l">Orders</div>
                                    </div>
                                    <div class="c-24__st-li">
                                        <div class="c-24__st-v">100%</div>
                                        <div class="c-24__st-l">Success</div>
                                    </div>
                                    <div class="c-24__st-li for__stars">
                                        <div class="c-24__st-v"><span>5.0</span>
                                            <div class="rating-stars">
                                                <div class="rating-stars__bar"></div>
                                                <div class="rating-stars__bar is--active" style="width:100%"></div>
                                            </div>
                                        </div>
                                        <div class="c-24__st-l">Rating</div>
                                    </div>
                                </div>
                            </div>
                            <div class="c-24__ac">
                                <form action="https://app.essaypro.com/auth/register" method="get">
                                    <button type="submit" class="button-as-link button-outline__primary hire"
                                            data-ga-category="writer" data-ga-action="click" data-ga-label="HIRE"><span
                                            class="button-text">Hire</span></button>
                                </form>
                            </div>
                            <div class="c-24__ps ps-1"></div>
                        </li>
                        <li class="c-24__li" data-writer-id="114484">
                            <div class="c-24__i">
                                <div class="c-24__wr"><span data-link="writer/114484.html" class="h-l"><button
                                            type="submit" class="button-as-link"><span
                                                class="c-24__wr-av avatar--medium"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAED0lEQVRYhbWYz1MbZRjHP++7v5JsIGAU5FedasUpU+nBGe3JFg969GhP2qMHOTD9N5RxBg8eHU8e7U0PDuKpOuOBDtOOWIsyFBpCfkGWkN1k18MmJUAT9l3ge9vJ883z3X32ffb7PIKYKFQcA7gO3ADeBK4C062fHwCPgL+B+8ByNmN7cfIIRVESmAFmgY8Vc90DFoDFbMb2o5IiCSxUHAHcBH4AhhWFHUcOuA0sZTN2cFrwqQILFWcM+Am4dkZhx7ECfJTN2Ju9gnoKLFScW8AvgDw/XUfgAx9kM/ZSt4CuiQsVZw5Y7BVzDpDAr61cXQNOoFBx7gLzF6XqBZjvJvJEiVtlXbxoRV1w63i5jwhsHYh1YpTV930ajSZCCgxdjyvQBy5lM/bTEwJbrWQFmFL5x2rVYbfqUKsdEARh1zBNg750mkx/GimV73UFmG63oE72TVVxz3J5nm3vsL9fey4OwHU9CsUST7dy+H7kntzGNeD99oWA51+ITRSacLPZZO2/jVPjLNNkbHRY9UnmgNFsxvbbrBkVcZ7XIL9TjBRbd12KpYqKOFpaZuCwxLMq7O38DlVnP3J8ZXfvyCsQEV8AiJYrcVWYT/5dx/fVEk6MjWBZphIHMCWhZYqMIAiUxUH4zsbAtCT0c5EhhEAIJZcW8tTbDcANSWg2lSClusA4HOCKJHTCStA0TTmTHoMDTEkObXok7O5VcV11954vlJQ5wHXlFyOOuLPwJOGAExmmacRKZBqxDMSyJJy+IsNOJeMkwrZTcWgPJeFoGBmappFIWEpZhBBxb+yxJJxblTAyPERf2o4Ua+g6r02MxrFdAPclsKzK0jRJKuITSSQt9PgG9oFsTfz3VJlpOxWptw3098cRBvBjNmN77ee+oMoWQtDX17vMlmXGMQhtfAOHdmuR0CQq4bRvslDbrHQiR2twkwCtXcntuP92Afikvb/pPFpLhAPLqfAaDbbzBUrl3Z5xB/U6m1s5agcHKuJWgN/aF0pjp+t5lMoVqlUHVYOcTFgMDmZIJXuefh+Y6NzXRBrcXdejWCor2fxusCyTlwYHujXu3oN7h8g5YD4IAgrFMuVK71LGQSqZYGjo5c5WNZfN2F8fj+t6zPLl6t2trdyXtYP6uYtrQ9M0xkdfxTD0F4qDHiuOVwbSX2madgdQH0AiotlsBoVi6bNu4iDCAvPR4/W3q87+z77vj5ynOCnlVtpOfXj1yqWenSNSJ11d2xCe1/jU2a8tBEHQdxZhQog9O5WcNQz9+8nL42dfAXdidW1Dd73GHbfufu41Gu+ocA1d/9O0zG9NQ/9u8vJ4Iyov9rforycbScs03pWa9p4U4g0EkwIxBRAQPCRg1Q+Cf/xm8/e66/3x1uvjtTh5/ge5WGIs1koIzAAAAABJRU5ErkJggg=="
                                                    data-bg="linear-gradient(#fff, #ccc)"
                                                    data-src="https://assets.essaypro.com/114484/e2a27e871a2358a30183529703f60e10"
                                                    alt="Tutor Paul" class="avatar--medium__image lazy"> </span><span
                                                class="c-24__wr-n">Tutor Paul <span
                                                    class="c-24__wr-s true"></span></span></button></span>
                                    <div class="c-24__wr-d">Professional Academic Writer.</div>
                                </div>
                                <div class="c-24__st">
                                    <div class="c-24__st-li">
                                        <div class="c-24__st-v">3550</div>
                                        <div class="c-24__st-l">Orders</div>
                                    </div>
                                    <div class="c-24__st-li">
                                        <div class="c-24__st-v">100%</div>
                                        <div class="c-24__st-l">Success</div>
                                    </div>
                                    <div class="c-24__st-li for__stars">
                                        <div class="c-24__st-v"><span>5.0</span>
                                            <div class="rating-stars">
                                                <div class="rating-stars__bar"></div>
                                                <div class="rating-stars__bar is--active" style="width:100%"></div>
                                            </div>
                                        </div>
                                        <div class="c-24__st-l">Rating</div>
                                    </div>
                                </div>
                            </div>
                            <div class="c-24__ac">
                                <form action="https://app.essaypro.com/auth/register" method="get">
                                    <button type="submit" class="button-as-link button-outline__primary hire"
                                            data-ga-category="writer" data-ga-action="click" data-ga-label="HIRE"><span
                                            class="button-text">Hire</span></button>
                                </form>
                            </div>
                            <div class="c-24__ps ps-2"></div>
                        </li>
                        <li class="c-24__li" data-writer-id="76353">
                            <div class="c-24__i">
                                <div class="c-24__wr"><span data-link="writer/76353.html" class="h-l"><button
                                            type="submit" class="button-as-link"><span
                                                class="c-24__wr-av avatar--medium"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAED0lEQVRYhbWYz1MbZRjHP++7v5JsIGAU5FedasUpU+nBGe3JFg969GhP2qMHOTD9N5RxBg8eHU8e7U0PDuKpOuOBDtOOWIsyFBpCfkGWkN1k18MmJUAT9l3ge9vJ883z3X32ffb7PIKYKFQcA7gO3ADeBK4C062fHwCPgL+B+8ByNmN7cfIIRVESmAFmgY8Vc90DFoDFbMb2o5IiCSxUHAHcBH4AhhWFHUcOuA0sZTN2cFrwqQILFWcM+Am4dkZhx7ECfJTN2Ju9gnoKLFScW8AvgDw/XUfgAx9kM/ZSt4CuiQsVZw5Y7BVzDpDAr61cXQNOoFBx7gLzF6XqBZjvJvJEiVtlXbxoRV1w63i5jwhsHYh1YpTV930ajSZCCgxdjyvQBy5lM/bTEwJbrWQFmFL5x2rVYbfqUKsdEARh1zBNg750mkx/GimV73UFmG63oE72TVVxz3J5nm3vsL9fey4OwHU9CsUST7dy+H7kntzGNeD99oWA51+ITRSacLPZZO2/jVPjLNNkbHRY9UnmgNFsxvbbrBkVcZ7XIL9TjBRbd12KpYqKOFpaZuCwxLMq7O38DlVnP3J8ZXfvyCsQEV8AiJYrcVWYT/5dx/fVEk6MjWBZphIHMCWhZYqMIAiUxUH4zsbAtCT0c5EhhEAIJZcW8tTbDcANSWg2lSClusA4HOCKJHTCStA0TTmTHoMDTEkObXok7O5VcV11954vlJQ5wHXlFyOOuLPwJOGAExmmacRKZBqxDMSyJJy+IsNOJeMkwrZTcWgPJeFoGBmappFIWEpZhBBxb+yxJJxblTAyPERf2o4Ua+g6r02MxrFdAPclsKzK0jRJKuITSSQt9PgG9oFsTfz3VJlpOxWptw3098cRBvBjNmN77ee+oMoWQtDX17vMlmXGMQhtfAOHdmuR0CQq4bRvslDbrHQiR2twkwCtXcntuP92Afikvb/pPFpLhAPLqfAaDbbzBUrl3Z5xB/U6m1s5agcHKuJWgN/aF0pjp+t5lMoVqlUHVYOcTFgMDmZIJXuefh+Y6NzXRBrcXdejWCor2fxusCyTlwYHujXu3oN7h8g5YD4IAgrFMuVK71LGQSqZYGjo5c5WNZfN2F8fj+t6zPLl6t2trdyXtYP6uYtrQ9M0xkdfxTD0F4qDHiuOVwbSX2madgdQH0AiotlsBoVi6bNu4iDCAvPR4/W3q87+z77vj5ynOCnlVtpOfXj1yqWenSNSJ11d2xCe1/jU2a8tBEHQdxZhQog9O5WcNQz9+8nL42dfAXdidW1Dd73GHbfufu41Gu+ocA1d/9O0zG9NQ/9u8vJ4Iyov9rforycbScs03pWa9p4U4g0EkwIxBRAQPCRg1Q+Cf/xm8/e66/3x1uvjtTh5/ge5WGIs1koIzAAAAABJRU5ErkJggg=="
                                                    data-bg="linear-gradient(#fff, #ccc)"
                                                    data-src="https://assets.essaypro.com/76353/5b6341feaa408d27d1ec0a7b4c8d3e6f"
                                                    alt="Sharp Writer" class="avatar--medium__image lazy"> </span><span
                                                class="c-24__wr-n">Sharp Writer <span
                                                    class="c-24__wr-s true"></span></span></button></span>
                                    <div class="c-24__wr-d">Astute, honest and hardworking writer.</div>
                                </div>
                                <div class="c-24__st">
                                    <div class="c-24__st-li">
                                        <div class="c-24__st-v">2776</div>
                                        <div class="c-24__st-l">Orders</div>
                                    </div>
                                    <div class="c-24__st-li">
                                        <div class="c-24__st-v">100%</div>
                                        <div class="c-24__st-l">Success</div>
                                    </div>
                                    <div class="c-24__st-li for__stars">
                                        <div class="c-24__st-v"><span>5.0</span>
                                            <div class="rating-stars">
                                                <div class="rating-stars__bar"></div>
                                                <div class="rating-stars__bar is--active" style="width:100%"></div>
                                            </div>
                                        </div>
                                        <div class="c-24__st-l">Rating</div>
                                    </div>
                                </div>
                            </div>
                            <div class="c-24__ac">
                                <form action="https://app.essaypro.com/auth/register" method="get">
                                    <button type="submit" class="button-as-link button-outline__primary hire"
                                            data-ga-category="writer" data-ga-action="click" data-ga-label="HIRE"><span
                                            class="button-text">Hire</span></button>
                                </form>
                            </div>
                            <div class="c-24__ps ps-3"></div>
                        </li>
                        <li class="c-24__li" data-writer-id="51958">
                            <div class="c-24__i">
                                <div class="c-24__wr"><span data-link="writer/51958.html" class="h-l"><button
                                            type="submit" class="button-as-link"><span
                                                class="c-24__wr-av avatar--medium"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAED0lEQVRYhbWYz1MbZRjHP++7v5JsIGAU5FedasUpU+nBGe3JFg969GhP2qMHOTD9N5RxBg8eHU8e7U0PDuKpOuOBDtOOWIsyFBpCfkGWkN1k18MmJUAT9l3ge9vJ883z3X32ffb7PIKYKFQcA7gO3ADeBK4C062fHwCPgL+B+8ByNmN7cfIIRVESmAFmgY8Vc90DFoDFbMb2o5IiCSxUHAHcBH4AhhWFHUcOuA0sZTN2cFrwqQILFWcM+Am4dkZhx7ECfJTN2Ju9gnoKLFScW8AvgDw/XUfgAx9kM/ZSt4CuiQsVZw5Y7BVzDpDAr61cXQNOoFBx7gLzF6XqBZjvJvJEiVtlXbxoRV1w63i5jwhsHYh1YpTV930ajSZCCgxdjyvQBy5lM/bTEwJbrWQFmFL5x2rVYbfqUKsdEARh1zBNg750mkx/GimV73UFmG63oE72TVVxz3J5nm3vsL9fey4OwHU9CsUST7dy+H7kntzGNeD99oWA51+ITRSacLPZZO2/jVPjLNNkbHRY9UnmgNFsxvbbrBkVcZ7XIL9TjBRbd12KpYqKOFpaZuCwxLMq7O38DlVnP3J8ZXfvyCsQEV8AiJYrcVWYT/5dx/fVEk6MjWBZphIHMCWhZYqMIAiUxUH4zsbAtCT0c5EhhEAIJZcW8tTbDcANSWg2lSClusA4HOCKJHTCStA0TTmTHoMDTEkObXok7O5VcV11954vlJQ5wHXlFyOOuLPwJOGAExmmacRKZBqxDMSyJJy+IsNOJeMkwrZTcWgPJeFoGBmappFIWEpZhBBxb+yxJJxblTAyPERf2o4Ua+g6r02MxrFdAPclsKzK0jRJKuITSSQt9PgG9oFsTfz3VJlpOxWptw3098cRBvBjNmN77ee+oMoWQtDX17vMlmXGMQhtfAOHdmuR0CQq4bRvslDbrHQiR2twkwCtXcntuP92Afikvb/pPFpLhAPLqfAaDbbzBUrl3Z5xB/U6m1s5agcHKuJWgN/aF0pjp+t5lMoVqlUHVYOcTFgMDmZIJXuefh+Y6NzXRBrcXdejWCor2fxusCyTlwYHujXu3oN7h8g5YD4IAgrFMuVK71LGQSqZYGjo5c5WNZfN2F8fj+t6zPLl6t2trdyXtYP6uYtrQ9M0xkdfxTD0F4qDHiuOVwbSX2madgdQH0AiotlsBoVi6bNu4iDCAvPR4/W3q87+z77vj5ynOCnlVtpOfXj1yqWenSNSJ11d2xCe1/jU2a8tBEHQdxZhQog9O5WcNQz9+8nL42dfAXdidW1Dd73GHbfufu41Gu+ocA1d/9O0zG9NQ/9u8vJ4Iyov9rforycbScs03pWa9p4U4g0EkwIxBRAQPCRg1Q+Cf/xm8/e66/3x1uvjtTh5/ge5WGIs1koIzAAAAABJRU5ErkJggg=="
                                                    data-bg="linear-gradient(#fff, #ccc)"
                                                    data-src="https://assets.essaypro.com/51958/efaf313d2165a407062fca8586c9f8b9"
                                                    alt="Tutor Richie" class="avatar--medium__image lazy"> </span><span
                                                class="c-24__wr-n">Tutor Richie <span
                                                    class="c-24__wr-s false"></span></span></button></span>
                                    <div class="c-24__wr-d">Determined to deliver high-quality non-plagiarized work
                                    </div>
                                </div>
                                <div class="c-24__st">
                                    <div class="c-24__st-li">
                                        <div class="c-24__st-v">2515</div>
                                        <div class="c-24__st-l">Orders</div>
                                    </div>
                                    <div class="c-24__st-li">
                                        <div class="c-24__st-v">100%</div>
                                        <div class="c-24__st-l">Success</div>
                                    </div>
                                    <div class="c-24__st-li for__stars">
                                        <div class="c-24__st-v"><span>5.0</span>
                                            <div class="rating-stars">
                                                <div class="rating-stars__bar"></div>
                                                <div class="rating-stars__bar is--active" style="width:100%"></div>
                                            </div>
                                        </div>
                                        <div class="c-24__st-l">Rating</div>
                                    </div>
                                </div>
                            </div>
                            <div class="c-24__ac">
                                <form action="https://app.essaypro.com/auth/register" method="get">
                                    <button type="submit" class="button-as-link button-outline__primary hire"
                                            data-ga-category="writer" data-ga-action="click" data-ga-label="HIRE"><span
                                            class="button-text">Hire</span></button>
                                </form>
                            </div>
                            <div class="c-24__ps ps-4"></div>
                        </li>
                        <li class="c-24__li" data-writer-id="45752">
                            <div class="c-24__i">
                                <div class="c-24__wr"><span data-link="writer/45752.html" class="h-l"><button
                                            type="submit" class="button-as-link"><span
                                                class="c-24__wr-av avatar--medium"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAED0lEQVRYhbWYz1MbZRjHP++7v5JsIGAU5FedasUpU+nBGe3JFg969GhP2qMHOTD9N5RxBg8eHU8e7U0PDuKpOuOBDtOOWIsyFBpCfkGWkN1k18MmJUAT9l3ge9vJ883z3X32ffb7PIKYKFQcA7gO3ADeBK4C062fHwCPgL+B+8ByNmN7cfIIRVESmAFmgY8Vc90DFoDFbMb2o5IiCSxUHAHcBH4AhhWFHUcOuA0sZTN2cFrwqQILFWcM+Am4dkZhx7ECfJTN2Ju9gnoKLFScW8AvgDw/XUfgAx9kM/ZSt4CuiQsVZw5Y7BVzDpDAr61cXQNOoFBx7gLzF6XqBZjvJvJEiVtlXbxoRV1w63i5jwhsHYh1YpTV930ajSZCCgxdjyvQBy5lM/bTEwJbrWQFmFL5x2rVYbfqUKsdEARh1zBNg750mkx/GimV73UFmG63oE72TVVxz3J5nm3vsL9fey4OwHU9CsUST7dy+H7kntzGNeD99oWA51+ITRSacLPZZO2/jVPjLNNkbHRY9UnmgNFsxvbbrBkVcZ7XIL9TjBRbd12KpYqKOFpaZuCwxLMq7O38DlVnP3J8ZXfvyCsQEV8AiJYrcVWYT/5dx/fVEk6MjWBZphIHMCWhZYqMIAiUxUH4zsbAtCT0c5EhhEAIJZcW8tTbDcANSWg2lSClusA4HOCKJHTCStA0TTmTHoMDTEkObXok7O5VcV11954vlJQ5wHXlFyOOuLPwJOGAExmmacRKZBqxDMSyJJy+IsNOJeMkwrZTcWgPJeFoGBmappFIWEpZhBBxb+yxJJxblTAyPERf2o4Ua+g6r02MxrFdAPclsKzK0jRJKuITSSQt9PgG9oFsTfz3VJlpOxWptw3098cRBvBjNmN77ee+oMoWQtDX17vMlmXGMQhtfAOHdmuR0CQq4bRvslDbrHQiR2twkwCtXcntuP92Afikvb/pPFpLhAPLqfAaDbbzBUrl3Z5xB/U6m1s5agcHKuJWgN/aF0pjp+t5lMoVqlUHVYOcTFgMDmZIJXuefh+Y6NzXRBrcXdejWCor2fxusCyTlwYHujXu3oN7h8g5YD4IAgrFMuVK71LGQSqZYGjo5c5WNZfN2F8fj+t6zPLl6t2trdyXtYP6uYtrQ9M0xkdfxTD0F4qDHiuOVwbSX2madgdQH0AiotlsBoVi6bNu4iDCAvPR4/W3q87+z77vj5ynOCnlVtpOfXj1yqWenSNSJ11d2xCe1/jU2a8tBEHQdxZhQog9O5WcNQz9+8nL42dfAXdidW1Dd73GHbfufu41Gu+ocA1d/9O0zG9NQ/9u8vJ4Iyov9rforycbScs03pWa9p4U4g0EkwIxBRAQPCRg1Q+Cf/xm8/e66/3x1uvjtTh5/ge5WGIs1koIzAAAAABJRU5ErkJggg=="
                                                    data-bg="linear-gradient(#fff, #ccc)"
                                                    data-src="https://assets.essaypro.com/45752/d11e8329b4f9a2aedd348c43d84e856d"
                                                    alt="Awesome Tutor" class="avatar--medium__image lazy"> </span><span
                                                class="c-24__wr-n">Awesome Tutor <span
                                                    class="c-24__wr-s true"></span></span></button></span>
                                    <div class="c-24__wr-d">I am an exceptional writer who delivers outstanding
                                        results
                                    </div>
                                </div>
                                <div class="c-24__st">
                                    <div class="c-24__st-li">
                                        <div class="c-24__st-v">2046</div>
                                        <div class="c-24__st-l">Orders</div>
                                    </div>
                                    <div class="c-24__st-li">
                                        <div class="c-24__st-v">100%</div>
                                        <div class="c-24__st-l">Success</div>
                                    </div>
                                    <div class="c-24__st-li for__stars">
                                        <div class="c-24__st-v"><span>5.0</span>
                                            <div class="rating-stars">
                                                <div class="rating-stars__bar"></div>
                                                <div class="rating-stars__bar is--active" style="width:100%"></div>
                                            </div>
                                        </div>
                                        <div class="c-24__st-l">Rating</div>
                                    </div>
                                </div>
                            </div>
                            <div class="c-24__ac">
                                <form action="https://app.essaypro.com/auth/register" method="get">
                                    <button type="submit" class="button-as-link button-outline__primary hire"
                                            data-ga-category="writer" data-ga-action="click" data-ga-label="HIRE"><span
                                            class="button-text">Hire</span></button>
                                </form>
                            </div>
                            <div class="c-24__ps ps-5"></div>
                        </li>
                        <li class="c-24__li" data-writer-id="214983">
                            <div class="c-24__i">
                                <div class="c-24__wr"><span data-link="writer/214983.html" class="h-l"><button
                                            type="submit" class="button-as-link"><span
                                                class="c-24__wr-av avatar--medium"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAED0lEQVRYhbWYz1MbZRjHP++7v5JsIGAU5FedasUpU+nBGe3JFg969GhP2qMHOTD9N5RxBg8eHU8e7U0PDuKpOuOBDtOOWIsyFBpCfkGWkN1k18MmJUAT9l3ge9vJ883z3X32ffb7PIKYKFQcA7gO3ADeBK4C062fHwCPgL+B+8ByNmN7cfIIRVESmAFmgY8Vc90DFoDFbMb2o5IiCSxUHAHcBH4AhhWFHUcOuA0sZTN2cFrwqQILFWcM+Am4dkZhx7ECfJTN2Ju9gnoKLFScW8AvgDw/XUfgAx9kM/ZSt4CuiQsVZw5Y7BVzDpDAr61cXQNOoFBx7gLzF6XqBZjvJvJEiVtlXbxoRV1w63i5jwhsHYh1YpTV930ajSZCCgxdjyvQBy5lM/bTEwJbrWQFmFL5x2rVYbfqUKsdEARh1zBNg750mkx/GimV73UFmG63oE72TVVxz3J5nm3vsL9fey4OwHU9CsUST7dy+H7kntzGNeD99oWA51+ITRSacLPZZO2/jVPjLNNkbHRY9UnmgNFsxvbbrBkVcZ7XIL9TjBRbd12KpYqKOFpaZuCwxLMq7O38DlVnP3J8ZXfvyCsQEV8AiJYrcVWYT/5dx/fVEk6MjWBZphIHMCWhZYqMIAiUxUH4zsbAtCT0c5EhhEAIJZcW8tTbDcANSWg2lSClusA4HOCKJHTCStA0TTmTHoMDTEkObXok7O5VcV11954vlJQ5wHXlFyOOuLPwJOGAExmmacRKZBqxDMSyJJy+IsNOJeMkwrZTcWgPJeFoGBmappFIWEpZhBBxb+yxJJxblTAyPERf2o4Ua+g6r02MxrFdAPclsKzK0jRJKuITSSQt9PgG9oFsTfz3VJlpOxWptw3098cRBvBjNmN77ee+oMoWQtDX17vMlmXGMQhtfAOHdmuR0CQq4bRvslDbrHQiR2twkwCtXcntuP92Afikvb/pPFpLhAPLqfAaDbbzBUrl3Z5xB/U6m1s5agcHKuJWgN/aF0pjp+t5lMoVqlUHVYOcTFgMDmZIJXuefh+Y6NzXRBrcXdejWCor2fxusCyTlwYHujXu3oN7h8g5YD4IAgrFMuVK71LGQSqZYGjo5c5WNZfN2F8fj+t6zPLl6t2trdyXtYP6uYtrQ9M0xkdfxTD0F4qDHiuOVwbSX2madgdQH0AiotlsBoVi6bNu4iDCAvPR4/W3q87+z77vj5ynOCnlVtpOfXj1yqWenSNSJ11d2xCe1/jU2a8tBEHQdxZhQog9O5WcNQz9+8nL42dfAXdidW1Dd73GHbfufu41Gu+ocA1d/9O0zG9NQ/9u8vJ4Iyov9rforycbScs03pWa9p4U4g0EkwIxBRAQPCRg1Q+Cf/xm8/e66/3x1uvjtTh5/ge5WGIs1koIzAAAAABJRU5ErkJggg=="
                                                    data-bg="linear-gradient(#fff, #ccc)"
                                                    data-src="https://assets.essaypro.com/214983/Hash885324.jpg"
                                                    alt="Raymond Miller" class="avatar--medium__image lazy"> </span><span
                                                class="c-24__wr-n">Raymond Miller <span
                                                    class="c-24__wr-s true"></span></span></button></span>
                                    <div class="c-24__wr-d">Qualified and tested writer.</div>
                                </div>
                                <div class="c-24__st">
                                    <div class="c-24__st-li">
                                        <div class="c-24__st-v">1812</div>
                                        <div class="c-24__st-l">Orders</div>
                                    </div>
                                    <div class="c-24__st-li">
                                        <div class="c-24__st-v">100%</div>
                                        <div class="c-24__st-l">Success</div>
                                    </div>
                                    <div class="c-24__st-li for__stars">
                                        <div class="c-24__st-v"><span>5.0</span>
                                            <div class="rating-stars">
                                                <div class="rating-stars__bar"></div>
                                                <div class="rating-stars__bar is--active" style="width:100%"></div>
                                            </div>
                                        </div>
                                        <div class="c-24__st-l">Rating</div>
                                    </div>
                                </div>
                            </div>
                            <div class="c-24__ac">
                                <form action="https://app.essaypro.com/auth/register" method="get">
                                    <button type="submit" class="button-as-link button-outline__primary hire"
                                            data-ga-category="writer" data-ga-action="click" data-ga-label="HIRE"><span
                                            class="button-text">Hire</span></button>
                                </form>
                            </div>
                            <div class="c-24__ps ps-6"></div>
                        </li>
                        <li class="c-24__li" data-writer-id="121646">
                            <div class="c-24__i">
                                <div class="c-24__wr"><span data-link="writer/121646.html" class="h-l"><button
                                            type="submit" class="button-as-link"><span
                                                class="c-24__wr-av avatar--medium"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAED0lEQVRYhbWYz1MbZRjHP++7v5JsIGAU5FedasUpU+nBGe3JFg969GhP2qMHOTD9N5RxBg8eHU8e7U0PDuKpOuOBDtOOWIsyFBpCfkGWkN1k18MmJUAT9l3ge9vJ883z3X32ffb7PIKYKFQcA7gO3ADeBK4C062fHwCPgL+B+8ByNmN7cfIIRVESmAFmgY8Vc90DFoDFbMb2o5IiCSxUHAHcBH4AhhWFHUcOuA0sZTN2cFrwqQILFWcM+Am4dkZhx7ECfJTN2Ju9gnoKLFScW8AvgDw/XUfgAx9kM/ZSt4CuiQsVZw5Y7BVzDpDAr61cXQNOoFBx7gLzF6XqBZjvJvJEiVtlXbxoRV1w63i5jwhsHYh1YpTV930ajSZCCgxdjyvQBy5lM/bTEwJbrWQFmFL5x2rVYbfqUKsdEARh1zBNg750mkx/GimV73UFmG63oE72TVVxz3J5nm3vsL9fey4OwHU9CsUST7dy+H7kntzGNeD99oWA51+ITRSacLPZZO2/jVPjLNNkbHRY9UnmgNFsxvbbrBkVcZ7XIL9TjBRbd12KpYqKOFpaZuCwxLMq7O38DlVnP3J8ZXfvyCsQEV8AiJYrcVWYT/5dx/fVEk6MjWBZphIHMCWhZYqMIAiUxUH4zsbAtCT0c5EhhEAIJZcW8tTbDcANSWg2lSClusA4HOCKJHTCStA0TTmTHoMDTEkObXok7O5VcV11954vlJQ5wHXlFyOOuLPwJOGAExmmacRKZBqxDMSyJJy+IsNOJeMkwrZTcWgPJeFoGBmappFIWEpZhBBxb+yxJJxblTAyPERf2o4Ua+g6r02MxrFdAPclsKzK0jRJKuITSSQt9PgG9oFsTfz3VJlpOxWptw3098cRBvBjNmN77ee+oMoWQtDX17vMlmXGMQhtfAOHdmuR0CQq4bRvslDbrHQiR2twkwCtXcntuP92Afikvb/pPFpLhAPLqfAaDbbzBUrl3Z5xB/U6m1s5agcHKuJWgN/aF0pjp+t5lMoVqlUHVYOcTFgMDmZIJXuefh+Y6NzXRBrcXdejWCor2fxusCyTlwYHujXu3oN7h8g5YD4IAgrFMuVK71LGQSqZYGjo5c5WNZfN2F8fj+t6zPLl6t2trdyXtYP6uYtrQ9M0xkdfxTD0F4qDHiuOVwbSX2madgdQH0AiotlsBoVi6bNu4iDCAvPR4/W3q87+z77vj5ynOCnlVtpOfXj1yqWenSNSJ11d2xCe1/jU2a8tBEHQdxZhQog9O5WcNQz9+8nL42dfAXdidW1Dd73GHbfufu41Gu+ocA1d/9O0zG9NQ/9u8vJ4Iyov9rforycbScs03pWa9p4U4g0EkwIxBRAQPCRg1Q+Cf/xm8/e66/3x1uvjtTh5/ge5WGIs1koIzAAAAABJRU5ErkJggg=="
                                                    data-bg="linear-gradient(#fff, #ccc)"
                                                    data-src="https://assets.essaypro.com/121646/49e90cfa90151a1385f54cba6966ed80"
                                                    alt="Dr. Linet" class="avatar--medium__image lazy"> </span><span
                                                class="c-24__wr-n">Dr. Linet <span
                                                    class="c-24__wr-s true"></span></span></button></span>
                                    <div class="c-24__wr-d">Professional Academic and Technical Writer</div>
                                </div>
                                <div class="c-24__st">
                                    <div class="c-24__st-li">
                                        <div class="c-24__st-v">1655</div>
                                        <div class="c-24__st-l">Orders</div>
                                    </div>
                                    <div class="c-24__st-li">
                                        <div class="c-24__st-v">100%</div>
                                        <div class="c-24__st-l">Success</div>
                                    </div>
                                    <div class="c-24__st-li for__stars">
                                        <div class="c-24__st-v"><span>5.0</span>
                                            <div class="rating-stars">
                                                <div class="rating-stars__bar"></div>
                                                <div class="rating-stars__bar is--active" style="width:100%"></div>
                                            </div>
                                        </div>
                                        <div class="c-24__st-l">Rating</div>
                                    </div>
                                </div>
                            </div>
                            <div class="c-24__ac">
                                <form action="https://app.essaypro.com/auth/register" method="get">
                                    <button type="submit" class="button-as-link button-outline__primary hire"
                                            data-ga-category="writer" data-ga-action="click" data-ga-label="HIRE"><span
                                            class="button-text">Hire</span></button>
                                </form>
                            </div>
                            <div class="c-24__ps ps-7"></div>
                        </li>
                        <li class="c-24__li" data-writer-id="51959">
                            <div class="c-24__i">
                                <div class="c-24__wr"><span data-link="writer/51959.html" class="h-l"><button
                                            type="submit" class="button-as-link"><span
                                                class="c-24__wr-av avatar--medium"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAED0lEQVRYhbWYz1MbZRjHP++7v5JsIGAU5FedasUpU+nBGe3JFg969GhP2qMHOTD9N5RxBg8eHU8e7U0PDuKpOuOBDtOOWIsyFBpCfkGWkN1k18MmJUAT9l3ge9vJ883z3X32ffb7PIKYKFQcA7gO3ADeBK4C062fHwCPgL+B+8ByNmN7cfIIRVESmAFmgY8Vc90DFoDFbMb2o5IiCSxUHAHcBH4AhhWFHUcOuA0sZTN2cFrwqQILFWcM+Am4dkZhx7ECfJTN2Ju9gnoKLFScW8AvgDw/XUfgAx9kM/ZSt4CuiQsVZw5Y7BVzDpDAr61cXQNOoFBx7gLzF6XqBZjvJvJEiVtlXbxoRV1w63i5jwhsHYh1YpTV930ajSZCCgxdjyvQBy5lM/bTEwJbrWQFmFL5x2rVYbfqUKsdEARh1zBNg750mkx/GimV73UFmG63oE72TVVxz3J5nm3vsL9fey4OwHU9CsUST7dy+H7kntzGNeD99oWA51+ITRSacLPZZO2/jVPjLNNkbHRY9UnmgNFsxvbbrBkVcZ7XIL9TjBRbd12KpYqKOFpaZuCwxLMq7O38DlVnP3J8ZXfvyCsQEV8AiJYrcVWYT/5dx/fVEk6MjWBZphIHMCWhZYqMIAiUxUH4zsbAtCT0c5EhhEAIJZcW8tTbDcANSWg2lSClusA4HOCKJHTCStA0TTmTHoMDTEkObXok7O5VcV11954vlJQ5wHXlFyOOuLPwJOGAExmmacRKZBqxDMSyJJy+IsNOJeMkwrZTcWgPJeFoGBmappFIWEpZhBBxb+yxJJxblTAyPERf2o4Ua+g6r02MxrFdAPclsKzK0jRJKuITSSQt9PgG9oFsTfz3VJlpOxWptw3098cRBvBjNmN77ee+oMoWQtDX17vMlmXGMQhtfAOHdmuR0CQq4bRvslDbrHQiR2twkwCtXcntuP92Afikvb/pPFpLhAPLqfAaDbbzBUrl3Z5xB/U6m1s5agcHKuJWgN/aF0pjp+t5lMoVqlUHVYOcTFgMDmZIJXuefh+Y6NzXRBrcXdejWCor2fxusCyTlwYHujXu3oN7h8g5YD4IAgrFMuVK71LGQSqZYGjo5c5WNZfN2F8fj+t6zPLl6t2trdyXtYP6uYtrQ9M0xkdfxTD0F4qDHiuOVwbSX2madgdQH0AiotlsBoVi6bNu4iDCAvPR4/W3q87+z77vj5ynOCnlVtpOfXj1yqWenSNSJ11d2xCe1/jU2a8tBEHQdxZhQog9O5WcNQz9+8nL42dfAXdidW1Dd73GHbfufu41Gu+ocA1d/9O0zG9NQ/9u8vJ4Iyov9rforycbScs03pWa9p4U4g0EkwIxBRAQPCRg1Q+Cf/xm8/e66/3x1uvjtTh5/ge5WGIs1koIzAAAAABJRU5ErkJggg=="
                                                    data-bg="linear-gradient(#fff, #ccc)"
                                                    data-src="https://assets.essaypro.com/51959/0a725f92337f9b150a96569a41273adc"
                                                    alt="John The Tutor" class="avatar--medium__image lazy"> </span><span
                                                class="c-24__wr-n">John The Tutor <span class="c-24__wr-s false"></span></span></button></span>
                                    <div class="c-24__wr-d">Quality work and satisfaction guaranteed!</div>
                                </div>
                                <div class="c-24__st">
                                    <div class="c-24__st-li">
                                        <div class="c-24__st-v">1556</div>
                                        <div class="c-24__st-l">Orders</div>
                                    </div>
                                    <div class="c-24__st-li">
                                        <div class="c-24__st-v">100%</div>
                                        <div class="c-24__st-l">Success</div>
                                    </div>
                                    <div class="c-24__st-li for__stars">
                                        <div class="c-24__st-v"><span>5.0</span>
                                            <div class="rating-stars">
                                                <div class="rating-stars__bar"></div>
                                                <div class="rating-stars__bar is--active" style="width:100%"></div>
                                            </div>
                                        </div>
                                        <div class="c-24__st-l">Rating</div>
                                    </div>
                                </div>
                            </div>
                            <div class="c-24__ac">
                                <form action="https://app.essaypro.com/auth/register" method="get">
                                    <button type="submit" class="button-as-link button-outline__primary hire"
                                            data-ga-category="writer" data-ga-action="click" data-ga-label="HIRE"><span
                                            class="button-text">Hire</span></button>
                                </form>
                            </div>
                            <div class="c-24__ps ps-8"></div>
                        </li>
                        <li class="c-24__li" data-writer-id="141906">
                            <div class="c-24__i">
                                <div class="c-24__wr"><span data-link="writer/141906.html" class="h-l"><button
                                            type="submit" class="button-as-link"><span
                                                class="c-24__wr-av avatar--medium"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAED0lEQVRYhbWYz1MbZRjHP++7v5JsIGAU5FedasUpU+nBGe3JFg969GhP2qMHOTD9N5RxBg8eHU8e7U0PDuKpOuOBDtOOWIsyFBpCfkGWkN1k18MmJUAT9l3ge9vJ883z3X32ffb7PIKYKFQcA7gO3ADeBK4C062fHwCPgL+B+8ByNmN7cfIIRVESmAFmgY8Vc90DFoDFbMb2o5IiCSxUHAHcBH4AhhWFHUcOuA0sZTN2cFrwqQILFWcM+Am4dkZhx7ECfJTN2Ju9gnoKLFScW8AvgDw/XUfgAx9kM/ZSt4CuiQsVZw5Y7BVzDpDAr61cXQNOoFBx7gLzF6XqBZjvJvJEiVtlXbxoRV1w63i5jwhsHYh1YpTV930ajSZCCgxdjyvQBy5lM/bTEwJbrWQFmFL5x2rVYbfqUKsdEARh1zBNg750mkx/GimV73UFmG63oE72TVVxz3J5nm3vsL9fey4OwHU9CsUST7dy+H7kntzGNeD99oWA51+ITRSacLPZZO2/jVPjLNNkbHRY9UnmgNFsxvbbrBkVcZ7XIL9TjBRbd12KpYqKOFpaZuCwxLMq7O38DlVnP3J8ZXfvyCsQEV8AiJYrcVWYT/5dx/fVEk6MjWBZphIHMCWhZYqMIAiUxUH4zsbAtCT0c5EhhEAIJZcW8tTbDcANSWg2lSClusA4HOCKJHTCStA0TTmTHoMDTEkObXok7O5VcV11954vlJQ5wHXlFyOOuLPwJOGAExmmacRKZBqxDMSyJJy+IsNOJeMkwrZTcWgPJeFoGBmappFIWEpZhBBxb+yxJJxblTAyPERf2o4Ua+g6r02MxrFdAPclsKzK0jRJKuITSSQt9PgG9oFsTfz3VJlpOxWptw3098cRBvBjNmN77ee+oMoWQtDX17vMlmXGMQhtfAOHdmuR0CQq4bRvslDbrHQiR2twkwCtXcntuP92Afikvb/pPFpLhAPLqfAaDbbzBUrl3Z5xB/U6m1s5agcHKuJWgN/aF0pjp+t5lMoVqlUHVYOcTFgMDmZIJXuefh+Y6NzXRBrcXdejWCor2fxusCyTlwYHujXu3oN7h8g5YD4IAgrFMuVK71LGQSqZYGjo5c5WNZfN2F8fj+t6zPLl6t2trdyXtYP6uYtrQ9M0xkdfxTD0F4qDHiuOVwbSX2madgdQH0AiotlsBoVi6bNu4iDCAvPR4/W3q87+z77vj5ynOCnlVtpOfXj1yqWenSNSJ11d2xCe1/jU2a8tBEHQdxZhQog9O5WcNQz9+8nL42dfAXdidW1Dd73GHbfufu41Gu+ocA1d/9O0zG9NQ/9u8vJ4Iyov9rforycbScs03pWa9p4U4g0EkwIxBRAQPCRg1Q+Cf/xm8/e66/3x1uvjtTh5/ge5WGIs1koIzAAAAABJRU5ErkJggg=="
                                                    data-bg="linear-gradient(#fff, #ccc)"
                                                    data-src="https://assets.essaypro.com/141906/5ac3754d6a63e6a65b184b9da2cfa4e8"
                                                    alt="Prof. Leo Hoth" class="avatar--medium__image lazy"> </span><span
                                                class="c-24__wr-n">Prof. Leo Hoth <span class="c-24__wr-s false"></span></span></button></span>
                                    <div class="c-24__wr-d">Devoted to provide quality work and timely delivery.</div>
                                </div>
                                <div class="c-24__st">
                                    <div class="c-24__st-li">
                                        <div class="c-24__st-v">1454</div>
                                        <div class="c-24__st-l">Orders</div>
                                    </div>
                                    <div class="c-24__st-li">
                                        <div class="c-24__st-v">100%</div>
                                        <div class="c-24__st-l">Success</div>
                                    </div>
                                    <div class="c-24__st-li for__stars">
                                        <div class="c-24__st-v"><span>5.0</span>
                                            <div class="rating-stars">
                                                <div class="rating-stars__bar"></div>
                                                <div class="rating-stars__bar is--active" style="width:100%"></div>
                                            </div>
                                        </div>
                                        <div class="c-24__st-l">Rating</div>
                                    </div>
                                </div>
                            </div>
                            <div class="c-24__ac">
                                <form action="https://app.essaypro.com/auth/register" method="get">
                                    <button type="submit" class="button-as-link button-outline__primary hire"
                                            data-ga-category="writer" data-ga-action="click" data-ga-label="HIRE"><span
                                            class="button-text">Hire</span></button>
                                </form>
                            </div>
                            <div class="c-24__ps ps-9"></div>
                        </li>
                        <li class="c-24__li" data-writer-id="144745">
                            <div class="c-24__i">
                                <div class="c-24__wr"><span data-link="writer/144745.html" class="h-l"><button
                                            type="submit" class="button-as-link"><span
                                                class="c-24__wr-av avatar--medium"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAED0lEQVRYhbWYz1MbZRjHP++7v5JsIGAU5FedasUpU+nBGe3JFg969GhP2qMHOTD9N5RxBg8eHU8e7U0PDuKpOuOBDtOOWIsyFBpCfkGWkN1k18MmJUAT9l3ge9vJ883z3X32ffb7PIKYKFQcA7gO3ADeBK4C062fHwCPgL+B+8ByNmN7cfIIRVESmAFmgY8Vc90DFoDFbMb2o5IiCSxUHAHcBH4AhhWFHUcOuA0sZTN2cFrwqQILFWcM+Am4dkZhx7ECfJTN2Ju9gnoKLFScW8AvgDw/XUfgAx9kM/ZSt4CuiQsVZw5Y7BVzDpDAr61cXQNOoFBx7gLzF6XqBZjvJvJEiVtlXbxoRV1w63i5jwhsHYh1YpTV930ajSZCCgxdjyvQBy5lM/bTEwJbrWQFmFL5x2rVYbfqUKsdEARh1zBNg750mkx/GimV73UFmG63oE72TVVxz3J5nm3vsL9fey4OwHU9CsUST7dy+H7kntzGNeD99oWA51+ITRSacLPZZO2/jVPjLNNkbHRY9UnmgNFsxvbbrBkVcZ7XIL9TjBRbd12KpYqKOFpaZuCwxLMq7O38DlVnP3J8ZXfvyCsQEV8AiJYrcVWYT/5dx/fVEk6MjWBZphIHMCWhZYqMIAiUxUH4zsbAtCT0c5EhhEAIJZcW8tTbDcANSWg2lSClusA4HOCKJHTCStA0TTmTHoMDTEkObXok7O5VcV11954vlJQ5wHXlFyOOuLPwJOGAExmmacRKZBqxDMSyJJy+IsNOJeMkwrZTcWgPJeFoGBmappFIWEpZhBBxb+yxJJxblTAyPERf2o4Ua+g6r02MxrFdAPclsKzK0jRJKuITSSQt9PgG9oFsTfz3VJlpOxWptw3098cRBvBjNmN77ee+oMoWQtDX17vMlmXGMQhtfAOHdmuR0CQq4bRvslDbrHQiR2twkwCtXcntuP92Afikvb/pPFpLhAPLqfAaDbbzBUrl3Z5xB/U6m1s5agcHKuJWgN/aF0pjp+t5lMoVqlUHVYOcTFgMDmZIJXuefh+Y6NzXRBrcXdejWCor2fxusCyTlwYHujXu3oN7h8g5YD4IAgrFMuVK71LGQSqZYGjo5c5WNZfN2F8fj+t6zPLl6t2trdyXtYP6uYtrQ9M0xkdfxTD0F4qDHiuOVwbSX2madgdQH0AiotlsBoVi6bNu4iDCAvPR4/W3q87+z77vj5ynOCnlVtpOfXj1yqWenSNSJ11d2xCe1/jU2a8tBEHQdxZhQog9O5WcNQz9+8nL42dfAXdidW1Dd73GHbfufu41Gu+ocA1d/9O0zG9NQ/9u8vJ4Iyov9rforycbScs03pWa9p4U4g0EkwIxBRAQPCRg1Q+Cf/xm8/e66/3x1uvjtTh5/ge5WGIs1koIzAAAAABJRU5ErkJggg=="
                                                    data-bg="linear-gradient(#fff, #ccc)"
                                                    data-src="https://assets.essaypro.com/144745/8b4052b6cc3ad5e5dcad3cb79993375f"
                                                    alt="Professor Tyrrel Lee" class="avatar--medium__image lazy"> </span><span
                                                class="c-24__wr-n">Professor Tyrrel Lee <span
                                                    class="c-24__wr-s false"></span></span></button></span>
                                    <div class="c-24__wr-d">Dedication and perfection define me.</div>
                                </div>
                                <div class="c-24__st">
                                    <div class="c-24__st-li">
                                        <div class="c-24__st-v">1442</div>
                                        <div class="c-24__st-l">Orders</div>
                                    </div>
                                    <div class="c-24__st-li">
                                        <div class="c-24__st-v">100%</div>
                                        <div class="c-24__st-l">Success</div>
                                    </div>
                                    <div class="c-24__st-li for__stars">
                                        <div class="c-24__st-v"><span>5.0</span>
                                            <div class="rating-stars">
                                                <div class="rating-stars__bar"></div>
                                                <div class="rating-stars__bar is--active" style="width:100%"></div>
                                            </div>
                                        </div>
                                        <div class="c-24__st-l">Rating</div>
                                    </div>
                                </div>
                            </div>
                            <div class="c-24__ac">
                                <form action="https://app.essaypro.com/auth/register" method="get">
                                    <button type="submit" class="button-as-link button-outline__primary hire"
                                            data-ga-category="writer" data-ga-action="click" data-ga-label="HIRE"><span
                                            class="button-text">Hire</span></button>
                                </form>
                            </div>
                            <div class="c-24__ps ps-10"></div>
                        </li>
                        <li class="c-24__li" data-writer-id="169578">
                            <div class="c-24__i">
                                <div class="c-24__wr"><span data-link="writer/169578.html" class="h-l"><button
                                            type="submit" class="button-as-link"><span
                                                class="c-24__wr-av avatar--medium"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAED0lEQVRYhbWYz1MbZRjHP++7v5JsIGAU5FedasUpU+nBGe3JFg969GhP2qMHOTD9N5RxBg8eHU8e7U0PDuKpOuOBDtOOWIsyFBpCfkGWkN1k18MmJUAT9l3ge9vJ883z3X32ffb7PIKYKFQcA7gO3ADeBK4C062fHwCPgL+B+8ByNmN7cfIIRVESmAFmgY8Vc90DFoDFbMb2o5IiCSxUHAHcBH4AhhWFHUcOuA0sZTN2cFrwqQILFWcM+Am4dkZhx7ECfJTN2Ju9gnoKLFScW8AvgDw/XUfgAx9kM/ZSt4CuiQsVZw5Y7BVzDpDAr61cXQNOoFBx7gLzF6XqBZjvJvJEiVtlXbxoRV1w63i5jwhsHYh1YpTV930ajSZCCgxdjyvQBy5lM/bTEwJbrWQFmFL5x2rVYbfqUKsdEARh1zBNg750mkx/GimV73UFmG63oE72TVVxz3J5nm3vsL9fey4OwHU9CsUST7dy+H7kntzGNeD99oWA51+ITRSacLPZZO2/jVPjLNNkbHRY9UnmgNFsxvbbrBkVcZ7XIL9TjBRbd12KpYqKOFpaZuCwxLMq7O38DlVnP3J8ZXfvyCsQEV8AiJYrcVWYT/5dx/fVEk6MjWBZphIHMCWhZYqMIAiUxUH4zsbAtCT0c5EhhEAIJZcW8tTbDcANSWg2lSClusA4HOCKJHTCStA0TTmTHoMDTEkObXok7O5VcV11954vlJQ5wHXlFyOOuLPwJOGAExmmacRKZBqxDMSyJJy+IsNOJeMkwrZTcWgPJeFoGBmappFIWEpZhBBxb+yxJJxblTAyPERf2o4Ua+g6r02MxrFdAPclsKzK0jRJKuITSSQt9PgG9oFsTfz3VJlpOxWptw3098cRBvBjNmN77ee+oMoWQtDX17vMlmXGMQhtfAOHdmuR0CQq4bRvslDbrHQiR2twkwCtXcntuP92Afikvb/pPFpLhAPLqfAaDbbzBUrl3Z5xB/U6m1s5agcHKuJWgN/aF0pjp+t5lMoVqlUHVYOcTFgMDmZIJXuefh+Y6NzXRBrcXdejWCor2fxusCyTlwYHujXu3oN7h8g5YD4IAgrFMuVK71LGQSqZYGjo5c5WNZfN2F8fj+t6zPLl6t2trdyXtYP6uYtrQ9M0xkdfxTD0F4qDHiuOVwbSX2madgdQH0AiotlsBoVi6bNu4iDCAvPR4/W3q87+z77vj5ynOCnlVtpOfXj1yqWenSNSJ11d2xCe1/jU2a8tBEHQdxZhQog9O5WcNQz9+8nL42dfAXdidW1Dd73GHbfufu41Gu+ocA1d/9O0zG9NQ/9u8vJ4Iyov9rforycbScs03pWa9p4U4g0EkwIxBRAQPCRg1Q+Cf/xm8/e66/3x1uvjtTh5/ge5WGIs1koIzAAAAABJRU5ErkJggg=="
                                                    data-bg="linear-gradient(#fff, #ccc)"
                                                    data-src="https://assets.essaypro.com/169578/c468dba71ceeb0cc058cbf7ee5e88a90"
                                                    alt="Dr. Ethan Hall" class="avatar--medium__image lazy"> </span><span
                                                class="c-24__wr-n">Dr. Ethan Hall <span
                                                    class="c-24__wr-s true"></span></span></button></span>
                                    <div class="c-24__wr-d">Hardworking, focused, intelligent and honest writer.</div>
                                </div>
                                <div class="c-24__st">
                                    <div class="c-24__st-li">
                                        <div class="c-24__st-v">1358</div>
                                        <div class="c-24__st-l">Orders</div>
                                    </div>
                                    <div class="c-24__st-li">
                                        <div class="c-24__st-v">100%</div>
                                        <div class="c-24__st-l">Success</div>
                                    </div>
                                    <div class="c-24__st-li for__stars">
                                        <div class="c-24__st-v"><span>5.0</span>
                                            <div class="rating-stars">
                                                <div class="rating-stars__bar"></div>
                                                <div class="rating-stars__bar is--active" style="width:100%"></div>
                                            </div>
                                        </div>
                                        <div class="c-24__st-l">Rating</div>
                                    </div>
                                </div>
                            </div>
                            <div class="c-24__ac">
                                <form action="https://app.essaypro.com/auth/register" method="get">
                                    <button type="submit" class="button-as-link button-outline__primary hire"
                                            data-ga-category="writer" data-ga-action="click" data-ga-label="HIRE"><span
                                            class="button-text">Hire</span></button>
                                </form>
                            </div>
                            <div class="c-24__ps ps-11"></div>
                        </li>
                        <li class="c-24__li" data-writer-id="141983">
                            <div class="c-24__i">
                                <div class="c-24__wr"><span data-link="writer/141983.html" class="h-l"><button
                                            type="submit" class="button-as-link"><span
                                                class="c-24__wr-av avatar--medium"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAED0lEQVRYhbWYz1MbZRjHP++7v5JsIGAU5FedasUpU+nBGe3JFg969GhP2qMHOTD9N5RxBg8eHU8e7U0PDuKpOuOBDtOOWIsyFBpCfkGWkN1k18MmJUAT9l3ge9vJ883z3X32ffb7PIKYKFQcA7gO3ADeBK4C062fHwCPgL+B+8ByNmN7cfIIRVESmAFmgY8Vc90DFoDFbMb2o5IiCSxUHAHcBH4AhhWFHUcOuA0sZTN2cFrwqQILFWcM+Am4dkZhx7ECfJTN2Ju9gnoKLFScW8AvgDw/XUfgAx9kM/ZSt4CuiQsVZw5Y7BVzDpDAr61cXQNOoFBx7gLzF6XqBZjvJvJEiVtlXbxoRV1w63i5jwhsHYh1YpTV930ajSZCCgxdjyvQBy5lM/bTEwJbrWQFmFL5x2rVYbfqUKsdEARh1zBNg750mkx/GimV73UFmG63oE72TVVxz3J5nm3vsL9fey4OwHU9CsUST7dy+H7kntzGNeD99oWA51+ITRSacLPZZO2/jVPjLNNkbHRY9UnmgNFsxvbbrBkVcZ7XIL9TjBRbd12KpYqKOFpaZuCwxLMq7O38DlVnP3J8ZXfvyCsQEV8AiJYrcVWYT/5dx/fVEk6MjWBZphIHMCWhZYqMIAiUxUH4zsbAtCT0c5EhhEAIJZcW8tTbDcANSWg2lSClusA4HOCKJHTCStA0TTmTHoMDTEkObXok7O5VcV11954vlJQ5wHXlFyOOuLPwJOGAExmmacRKZBqxDMSyJJy+IsNOJeMkwrZTcWgPJeFoGBmappFIWEpZhBBxb+yxJJxblTAyPERf2o4Ua+g6r02MxrFdAPclsKzK0jRJKuITSSQt9PgG9oFsTfz3VJlpOxWptw3098cRBvBjNmN77ee+oMoWQtDX17vMlmXGMQhtfAOHdmuR0CQq4bRvslDbrHQiR2twkwCtXcntuP92Afikvb/pPFpLhAPLqfAaDbbzBUrl3Z5xB/U6m1s5agcHKuJWgN/aF0pjp+t5lMoVqlUHVYOcTFgMDmZIJXuefh+Y6NzXRBrcXdejWCor2fxusCyTlwYHujXu3oN7h8g5YD4IAgrFMuVK71LGQSqZYGjo5c5WNZfN2F8fj+t6zPLl6t2trdyXtYP6uYtrQ9M0xkdfxTD0F4qDHiuOVwbSX2madgdQH0AiotlsBoVi6bNu4iDCAvPR4/W3q87+z77vj5ynOCnlVtpOfXj1yqWenSNSJ11d2xCe1/jU2a8tBEHQdxZhQog9O5WcNQz9+8nL42dfAXdidW1Dd73GHbfufu41Gu+ocA1d/9O0zG9NQ/9u8vJ4Iyov9rforycbScs03pWa9p4U4g0EkwIxBRAQPCRg1Q+Cf/xm8/e66/3x1uvjtTh5/ge5WGIs1koIzAAAAABJRU5ErkJggg=="
                                                    data-bg="linear-gradient(#fff, #ccc)"
                                                    data-src="https://assets.essaypro.com/141983/e26b790c2469050ac043da5844ae21a8"
                                                    alt="Teacher Ida" class="avatar--medium__image lazy"> </span><span
                                                class="c-24__wr-n">Teacher Ida <span
                                                    class="c-24__wr-s false"></span></span></button></span>
                                    <div class="c-24__wr-d">I am an outstandingly skilful online essay writer</div>
                                </div>
                                <div class="c-24__st">
                                    <div class="c-24__st-li">
                                        <div class="c-24__st-v">957</div>
                                        <div class="c-24__st-l">Orders</div>
                                    </div>
                                    <div class="c-24__st-li">
                                        <div class="c-24__st-v">100%</div>
                                        <div class="c-24__st-l">Success</div>
                                    </div>
                                    <div class="c-24__st-li for__stars">
                                        <div class="c-24__st-v"><span>5.0</span>
                                            <div class="rating-stars">
                                                <div class="rating-stars__bar"></div>
                                                <div class="rating-stars__bar is--active" style="width:100%"></div>
                                            </div>
                                        </div>
                                        <div class="c-24__st-l">Rating</div>
                                    </div>
                                </div>
                            </div>
                            <div class="c-24__ac">
                                <form action="https://app.essaypro.com/auth/register" method="get">
                                    <button type="submit" class="button-as-link button-outline__primary hire"
                                            data-ga-category="writer" data-ga-action="click" data-ga-label="HIRE"><span
                                            class="button-text">Hire</span></button>
                                </form>
                            </div>
                            <div class="c-24__ps ps-12"></div>
                        </li>
                        <li class="c-24__li" data-writer-id="179417">
                            <div class="c-24__i">
                                <div class="c-24__wr"><span data-link="writer/179417.html" class="h-l"><button
                                            type="submit" class="button-as-link"><span
                                                class="c-24__wr-av avatar--medium"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAED0lEQVRYhbWYz1MbZRjHP++7v5JsIGAU5FedasUpU+nBGe3JFg969GhP2qMHOTD9N5RxBg8eHU8e7U0PDuKpOuOBDtOOWIsyFBpCfkGWkN1k18MmJUAT9l3ge9vJ883z3X32ffb7PIKYKFQcA7gO3ADeBK4C062fHwCPgL+B+8ByNmN7cfIIRVESmAFmgY8Vc90DFoDFbMb2o5IiCSxUHAHcBH4AhhWFHUcOuA0sZTN2cFrwqQILFWcM+Am4dkZhx7ECfJTN2Ju9gnoKLFScW8AvgDw/XUfgAx9kM/ZSt4CuiQsVZw5Y7BVzDpDAr61cXQNOoFBx7gLzF6XqBZjvJvJEiVtlXbxoRV1w63i5jwhsHYh1YpTV930ajSZCCgxdjyvQBy5lM/bTEwJbrWQFmFL5x2rVYbfqUKsdEARh1zBNg750mkx/GimV73UFmG63oE72TVVxz3J5nm3vsL9fey4OwHU9CsUST7dy+H7kntzGNeD99oWA51+ITRSacLPZZO2/jVPjLNNkbHRY9UnmgNFsxvbbrBkVcZ7XIL9TjBRbd12KpYqKOFpaZuCwxLMq7O38DlVnP3J8ZXfvyCsQEV8AiJYrcVWYT/5dx/fVEk6MjWBZphIHMCWhZYqMIAiUxUH4zsbAtCT0c5EhhEAIJZcW8tTbDcANSWg2lSClusA4HOCKJHTCStA0TTmTHoMDTEkObXok7O5VcV11954vlJQ5wHXlFyOOuLPwJOGAExmmacRKZBqxDMSyJJy+IsNOJeMkwrZTcWgPJeFoGBmappFIWEpZhBBxb+yxJJxblTAyPERf2o4Ua+g6r02MxrFdAPclsKzK0jRJKuITSSQt9PgG9oFsTfz3VJlpOxWptw3098cRBvBjNmN77ee+oMoWQtDX17vMlmXGMQhtfAOHdmuR0CQq4bRvslDbrHQiR2twkwCtXcntuP92Afikvb/pPFpLhAPLqfAaDbbzBUrl3Z5xB/U6m1s5agcHKuJWgN/aF0pjp+t5lMoVqlUHVYOcTFgMDmZIJXuefh+Y6NzXRBrcXdejWCor2fxusCyTlwYHujXu3oN7h8g5YD4IAgrFMuVK71LGQSqZYGjo5c5WNZfN2F8fj+t6zPLl6t2trdyXtYP6uYtrQ9M0xkdfxTD0F4qDHiuOVwbSX2madgdQH0AiotlsBoVi6bNu4iDCAvPR4/W3q87+z77vj5ynOCnlVtpOfXj1yqWenSNSJ11d2xCe1/jU2a8tBEHQdxZhQog9O5WcNQz9+8nL42dfAXdidW1Dd73GHbfufu41Gu+ocA1d/9O0zG9NQ/9u8vJ4Iyov9rforycbScs03pWa9p4U4g0EkwIxBRAQPCRg1Q+Cf/xm8/e66/3x1uvjtTh5/ge5WGIs1koIzAAAAABJRU5ErkJggg=="
                                                    data-bg="linear-gradient(#fff, #ccc)"
                                                    data-src="https://assets.essaypro.com/179417/ac8dadb1add21ba9dc48123ad3a1a38c"
                                                    alt="Joe Baker" class="avatar--medium__image lazy"> </span><span
                                                class="c-24__wr-n">Joe Baker <span
                                                    class="c-24__wr-s true"></span></span></button></span>
                                    <div class="c-24__wr-d">Competent, efficient and reliable.</div>
                                </div>
                                <div class="c-24__st">
                                    <div class="c-24__st-li">
                                        <div class="c-24__st-v">936</div>
                                        <div class="c-24__st-l">Orders</div>
                                    </div>
                                    <div class="c-24__st-li">
                                        <div class="c-24__st-v">100%</div>
                                        <div class="c-24__st-l">Success</div>
                                    </div>
                                    <div class="c-24__st-li for__stars">
                                        <div class="c-24__st-v"><span>5.0</span>
                                            <div class="rating-stars">
                                                <div class="rating-stars__bar"></div>
                                                <div class="rating-stars__bar is--active" style="width:100%"></div>
                                            </div>
                                        </div>
                                        <div class="c-24__st-l">Rating</div>
                                    </div>
                                </div>
                            </div>
                            <div class="c-24__ac">
                                <form action="https://app.essaypro.com/auth/register" method="get">
                                    <button type="submit" class="button-as-link button-outline__primary hire"
                                            data-ga-category="writer" data-ga-action="click" data-ga-label="HIRE"><span
                                            class="button-text">Hire</span></button>
                                </form>
                            </div>
                            <div class="c-24__ps ps-13"></div>
                        </li>
                        <li class="c-24__li" data-writer-id="113676">
                            <div class="c-24__i">
                                <div class="c-24__wr"><span data-link="writer/113676.html" class="h-l"><button
                                            type="submit" class="button-as-link"><span
                                                class="c-24__wr-av avatar--medium"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAED0lEQVRYhbWYz1MbZRjHP++7v5JsIGAU5FedasUpU+nBGe3JFg969GhP2qMHOTD9N5RxBg8eHU8e7U0PDuKpOuOBDtOOWIsyFBpCfkGWkN1k18MmJUAT9l3ge9vJ883z3X32ffb7PIKYKFQcA7gO3ADeBK4C062fHwCPgL+B+8ByNmN7cfIIRVESmAFmgY8Vc90DFoDFbMb2o5IiCSxUHAHcBH4AhhWFHUcOuA0sZTN2cFrwqQILFWcM+Am4dkZhx7ECfJTN2Ju9gnoKLFScW8AvgDw/XUfgAx9kM/ZSt4CuiQsVZw5Y7BVzDpDAr61cXQNOoFBx7gLzF6XqBZjvJvJEiVtlXbxoRV1w63i5jwhsHYh1YpTV930ajSZCCgxdjyvQBy5lM/bTEwJbrWQFmFL5x2rVYbfqUKsdEARh1zBNg750mkx/GimV73UFmG63oE72TVVxz3J5nm3vsL9fey4OwHU9CsUST7dy+H7kntzGNeD99oWA51+ITRSacLPZZO2/jVPjLNNkbHRY9UnmgNFsxvbbrBkVcZ7XIL9TjBRbd12KpYqKOFpaZuCwxLMq7O38DlVnP3J8ZXfvyCsQEV8AiJYrcVWYT/5dx/fVEk6MjWBZphIHMCWhZYqMIAiUxUH4zsbAtCT0c5EhhEAIJZcW8tTbDcANSWg2lSClusA4HOCKJHTCStA0TTmTHoMDTEkObXok7O5VcV11954vlJQ5wHXlFyOOuLPwJOGAExmmacRKZBqxDMSyJJy+IsNOJeMkwrZTcWgPJeFoGBmappFIWEpZhBBxb+yxJJxblTAyPERf2o4Ua+g6r02MxrFdAPclsKzK0jRJKuITSSQt9PgG9oFsTfz3VJlpOxWptw3098cRBvBjNmN77ee+oMoWQtDX17vMlmXGMQhtfAOHdmuR0CQq4bRvslDbrHQiR2twkwCtXcntuP92Afikvb/pPFpLhAPLqfAaDbbzBUrl3Z5xB/U6m1s5agcHKuJWgN/aF0pjp+t5lMoVqlUHVYOcTFgMDmZIJXuefh+Y6NzXRBrcXdejWCor2fxusCyTlwYHujXu3oN7h8g5YD4IAgrFMuVK71LGQSqZYGjo5c5WNZfN2F8fj+t6zPLl6t2trdyXtYP6uYtrQ9M0xkdfxTD0F4qDHiuOVwbSX2madgdQH0AiotlsBoVi6bNu4iDCAvPR4/W3q87+z77vj5ynOCnlVtpOfXj1yqWenSNSJ11d2xCe1/jU2a8tBEHQdxZhQog9O5WcNQz9+8nL42dfAXdidW1Dd73GHbfufu41Gu+ocA1d/9O0zG9NQ/9u8vJ4Iyov9rforycbScs03pWa9p4U4g0EkwIxBRAQPCRg1Q+Cf/xm8/e66/3x1uvjtTh5/ge5WGIs1koIzAAAAABJRU5ErkJggg=="
                                                    data-bg="linear-gradient(#fff, #ccc)"
                                                    data-src="https://assets.essaypro.com/113676/48e2c40281d3a8d320ba1809194dafb8"
                                                    alt="The Redpen Mark" class="avatar--medium__image lazy"> </span><span
                                                class="c-24__wr-n">The Redpen Mark <span class="c-24__wr-s true"></span></span></button></span>
                                    <div class="c-24__wr-d">I am a reliable writer.</div>
                                </div>
                                <div class="c-24__st">
                                    <div class="c-24__st-li">
                                        <div class="c-24__st-v">921</div>
                                        <div class="c-24__st-l">Orders</div>
                                    </div>
                                    <div class="c-24__st-li">
                                        <div class="c-24__st-v">100%</div>
                                        <div class="c-24__st-l">Success</div>
                                    </div>
                                    <div class="c-24__st-li for__stars">
                                        <div class="c-24__st-v"><span>5.0</span>
                                            <div class="rating-stars">
                                                <div class="rating-stars__bar"></div>
                                                <div class="rating-stars__bar is--active" style="width:100%"></div>
                                            </div>
                                        </div>
                                        <div class="c-24__st-l">Rating</div>
                                    </div>
                                </div>
                            </div>
                            <div class="c-24__ac">
                                <form action="https://app.essaypro.com/auth/register" method="get">
                                    <button type="submit" class="button-as-link button-outline__primary hire"
                                            data-ga-category="writer" data-ga-action="click" data-ga-label="HIRE"><span
                                            class="button-text">Hire</span></button>
                                </form>
                            </div>
                            <div class="c-24__ps ps-14"></div>
                        </li>
                        <li class="c-24__li" data-writer-id="126522">
                            <div class="c-24__i">
                                <div class="c-24__wr"><span data-link="writer/126522.html" class="h-l"><button
                                            type="submit" class="button-as-link"><span
                                                class="c-24__wr-av avatar--medium"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAED0lEQVRYhbWYz1MbZRjHP++7v5JsIGAU5FedasUpU+nBGe3JFg969GhP2qMHOTD9N5RxBg8eHU8e7U0PDuKpOuOBDtOOWIsyFBpCfkGWkN1k18MmJUAT9l3ge9vJ883z3X32ffb7PIKYKFQcA7gO3ADeBK4C062fHwCPgL+B+8ByNmN7cfIIRVESmAFmgY8Vc90DFoDFbMb2o5IiCSxUHAHcBH4AhhWFHUcOuA0sZTN2cFrwqQILFWcM+Am4dkZhx7ECfJTN2Ju9gnoKLFScW8AvgDw/XUfgAx9kM/ZSt4CuiQsVZw5Y7BVzDpDAr61cXQNOoFBx7gLzF6XqBZjvJvJEiVtlXbxoRV1w63i5jwhsHYh1YpTV930ajSZCCgxdjyvQBy5lM/bTEwJbrWQFmFL5x2rVYbfqUKsdEARh1zBNg750mkx/GimV73UFmG63oE72TVVxz3J5nm3vsL9fey4OwHU9CsUST7dy+H7kntzGNeD99oWA51+ITRSacLPZZO2/jVPjLNNkbHRY9UnmgNFsxvbbrBkVcZ7XIL9TjBRbd12KpYqKOFpaZuCwxLMq7O38DlVnP3J8ZXfvyCsQEV8AiJYrcVWYT/5dx/fVEk6MjWBZphIHMCWhZYqMIAiUxUH4zsbAtCT0c5EhhEAIJZcW8tTbDcANSWg2lSClusA4HOCKJHTCStA0TTmTHoMDTEkObXok7O5VcV11954vlJQ5wHXlFyOOuLPwJOGAExmmacRKZBqxDMSyJJy+IsNOJeMkwrZTcWgPJeFoGBmappFIWEpZhBBxb+yxJJxblTAyPERf2o4Ua+g6r02MxrFdAPclsKzK0jRJKuITSSQt9PgG9oFsTfz3VJlpOxWptw3098cRBvBjNmN77ee+oMoWQtDX17vMlmXGMQhtfAOHdmuR0CQq4bRvslDbrHQiR2twkwCtXcntuP92Afikvb/pPFpLhAPLqfAaDbbzBUrl3Z5xB/U6m1s5agcHKuJWgN/aF0pjp+t5lMoVqlUHVYOcTFgMDmZIJXuefh+Y6NzXRBrcXdejWCor2fxusCyTlwYHujXu3oN7h8g5YD4IAgrFMuVK71LGQSqZYGjo5c5WNZfN2F8fj+t6zPLl6t2trdyXtYP6uYtrQ9M0xkdfxTD0F4qDHiuOVwbSX2madgdQH0AiotlsBoVi6bNu4iDCAvPR4/W3q87+z77vj5ynOCnlVtpOfXj1yqWenSNSJ11d2xCe1/jU2a8tBEHQdxZhQog9O5WcNQz9+8nL42dfAXdidW1Dd73GHbfufu41Gu+ocA1d/9O0zG9NQ/9u8vJ4Iyov9rforycbScs03pWa9p4U4g0EkwIxBRAQPCRg1Q+Cf/xm8/e66/3x1uvjtTh5/ge5WGIs1koIzAAAAABJRU5ErkJggg=="
                                                    data-bg="linear-gradient(#fff, #ccc)"
                                                    data-src="https://assets.essaypro.com/126522/ddf009a6c49f9220833e030a3b57597a"
                                                    alt="Dr. Aubrey Gray" class="avatar--medium__image lazy"> </span><span
                                                class="c-24__wr-n">Dr. Aubrey Gray <span class="c-24__wr-s false"></span></span></button></span>
                                    <div class="c-24__wr-d">I am an excellent and dynamic academic writer.</div>
                                </div>
                                <div class="c-24__st">
                                    <div class="c-24__st-li">
                                        <div class="c-24__st-v">907</div>
                                        <div class="c-24__st-l">Orders</div>
                                    </div>
                                    <div class="c-24__st-li">
                                        <div class="c-24__st-v">100%</div>
                                        <div class="c-24__st-l">Success</div>
                                    </div>
                                    <div class="c-24__st-li for__stars">
                                        <div class="c-24__st-v"><span>5.0</span>
                                            <div class="rating-stars">
                                                <div class="rating-stars__bar"></div>
                                                <div class="rating-stars__bar is--active" style="width:100%"></div>
                                            </div>
                                        </div>
                                        <div class="c-24__st-l">Rating</div>
                                    </div>
                                </div>
                            </div>
                            <div class="c-24__ac">
                                <form action="https://app.essaypro.com/auth/register" method="get">
                                    <button type="submit" class="button-as-link button-outline__primary hire"
                                            data-ga-category="writer" data-ga-action="click" data-ga-label="HIRE"><span
                                            class="button-text">Hire</span></button>
                                </form>
                            </div>
                            <div class="c-24__ps ps-15"></div>
                        </li>
                        <li class="c-24__li" data-writer-id="34973">
                            <div class="c-24__i">
                                <div class="c-24__wr"><span data-link="writer/34973.html" class="h-l"><button
                                            type="submit" class="button-as-link"><span
                                                class="c-24__wr-av avatar--medium"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAED0lEQVRYhbWYz1MbZRjHP++7v5JsIGAU5FedasUpU+nBGe3JFg969GhP2qMHOTD9N5RxBg8eHU8e7U0PDuKpOuOBDtOOWIsyFBpCfkGWkN1k18MmJUAT9l3ge9vJ883z3X32ffb7PIKYKFQcA7gO3ADeBK4C062fHwCPgL+B+8ByNmN7cfIIRVESmAFmgY8Vc90DFoDFbMb2o5IiCSxUHAHcBH4AhhWFHUcOuA0sZTN2cFrwqQILFWcM+Am4dkZhx7ECfJTN2Ju9gnoKLFScW8AvgDw/XUfgAx9kM/ZSt4CuiQsVZw5Y7BVzDpDAr61cXQNOoFBx7gLzF6XqBZjvJvJEiVtlXbxoRV1w63i5jwhsHYh1YpTV930ajSZCCgxdjyvQBy5lM/bTEwJbrWQFmFL5x2rVYbfqUKsdEARh1zBNg750mkx/GimV73UFmG63oE72TVVxz3J5nm3vsL9fey4OwHU9CsUST7dy+H7kntzGNeD99oWA51+ITRSacLPZZO2/jVPjLNNkbHRY9UnmgNFsxvbbrBkVcZ7XIL9TjBRbd12KpYqKOFpaZuCwxLMq7O38DlVnP3J8ZXfvyCsQEV8AiJYrcVWYT/5dx/fVEk6MjWBZphIHMCWhZYqMIAiUxUH4zsbAtCT0c5EhhEAIJZcW8tTbDcANSWg2lSClusA4HOCKJHTCStA0TTmTHoMDTEkObXok7O5VcV11954vlJQ5wHXlFyOOuLPwJOGAExmmacRKZBqxDMSyJJy+IsNOJeMkwrZTcWgPJeFoGBmappFIWEpZhBBxb+yxJJxblTAyPERf2o4Ua+g6r02MxrFdAPclsKzK0jRJKuITSSQt9PgG9oFsTfz3VJlpOxWptw3098cRBvBjNmN77ee+oMoWQtDX17vMlmXGMQhtfAOHdmuR0CQq4bRvslDbrHQiR2twkwCtXcntuP92Afikvb/pPFpLhAPLqfAaDbbzBUrl3Z5xB/U6m1s5agcHKuJWgN/aF0pjp+t5lMoVqlUHVYOcTFgMDmZIJXuefh+Y6NzXRBrcXdejWCor2fxusCyTlwYHujXu3oN7h8g5YD4IAgrFMuVK71LGQSqZYGjo5c5WNZfN2F8fj+t6zPLl6t2trdyXtYP6uYtrQ9M0xkdfxTD0F4qDHiuOVwbSX2madgdQH0AiotlsBoVi6bNu4iDCAvPR4/W3q87+z77vj5ynOCnlVtpOfXj1yqWenSNSJ11d2xCe1/jU2a8tBEHQdxZhQog9O5WcNQz9+8nL42dfAXdidW1Dd73GHbfufu41Gu+ocA1d/9O0zG9NQ/9u8vJ4Iyov9rforycbScs03pWa9p4U4g0EkwIxBRAQPCRg1Q+Cf/xm8/e66/3x1uvjtTh5/ge5WGIs1koIzAAAAABJRU5ErkJggg=="
                                                    data-bg="linear-gradient(#fff, #ccc)"
                                                    data-src="https://assets.essaypro.com/34973/921c4f1af1815cb649d6dcf31159fdef"
                                                    alt="Tutor Benson Trevis" class="avatar--medium__image lazy"> </span><span
                                                class="c-24__wr-n">Tutor Benson Trevis <span
                                                    class="c-24__wr-s false"></span></span></button></span>
                                    <div class="c-24__wr-d">Reliable, fast and authentic.</div>
                                </div>
                                <div class="c-24__st">
                                    <div class="c-24__st-li">
                                        <div class="c-24__st-v">857</div>
                                        <div class="c-24__st-l">Orders</div>
                                    </div>
                                    <div class="c-24__st-li">
                                        <div class="c-24__st-v">100%</div>
                                        <div class="c-24__st-l">Success</div>
                                    </div>
                                    <div class="c-24__st-li for__stars">
                                        <div class="c-24__st-v"><span>5.0</span>
                                            <div class="rating-stars">
                                                <div class="rating-stars__bar"></div>
                                                <div class="rating-stars__bar is--active" style="width:100%"></div>
                                            </div>
                                        </div>
                                        <div class="c-24__st-l">Rating</div>
                                    </div>
                                </div>
                            </div>
                            <div class="c-24__ac">
                                <form action="https://app.essaypro.com/auth/register" method="get">
                                    <button type="submit" class="button-as-link button-outline__primary hire"
                                            data-ga-category="writer" data-ga-action="click" data-ga-label="HIRE"><span
                                            class="button-text">Hire</span></button>
                                </form>
                            </div>
                            <div class="c-24__ps ps-16"></div>
                        </li>
                        <li class="c-24__li" data-writer-id="150468">
                            <div class="c-24__i">
                                <div class="c-24__wr"><span data-link="writer/150468.html" class="h-l"><button
                                            type="submit" class="button-as-link"><span
                                                class="c-24__wr-av avatar--medium"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAED0lEQVRYhbWYz1MbZRjHP++7v5JsIGAU5FedasUpU+nBGe3JFg969GhP2qMHOTD9N5RxBg8eHU8e7U0PDuKpOuOBDtOOWIsyFBpCfkGWkN1k18MmJUAT9l3ge9vJ883z3X32ffb7PIKYKFQcA7gO3ADeBK4C062fHwCPgL+B+8ByNmN7cfIIRVESmAFmgY8Vc90DFoDFbMb2o5IiCSxUHAHcBH4AhhWFHUcOuA0sZTN2cFrwqQILFWcM+Am4dkZhx7ECfJTN2Ju9gnoKLFScW8AvgDw/XUfgAx9kM/ZSt4CuiQsVZw5Y7BVzDpDAr61cXQNOoFBx7gLzF6XqBZjvJvJEiVtlXbxoRV1w63i5jwhsHYh1YpTV930ajSZCCgxdjyvQBy5lM/bTEwJbrWQFmFL5x2rVYbfqUKsdEARh1zBNg750mkx/GimV73UFmG63oE72TVVxz3J5nm3vsL9fey4OwHU9CsUST7dy+H7kntzGNeD99oWA51+ITRSacLPZZO2/jVPjLNNkbHRY9UnmgNFsxvbbrBkVcZ7XIL9TjBRbd12KpYqKOFpaZuCwxLMq7O38DlVnP3J8ZXfvyCsQEV8AiJYrcVWYT/5dx/fVEk6MjWBZphIHMCWhZYqMIAiUxUH4zsbAtCT0c5EhhEAIJZcW8tTbDcANSWg2lSClusA4HOCKJHTCStA0TTmTHoMDTEkObXok7O5VcV11954vlJQ5wHXlFyOOuLPwJOGAExmmacRKZBqxDMSyJJy+IsNOJeMkwrZTcWgPJeFoGBmappFIWEpZhBBxb+yxJJxblTAyPERf2o4Ua+g6r02MxrFdAPclsKzK0jRJKuITSSQt9PgG9oFsTfz3VJlpOxWptw3098cRBvBjNmN77ee+oMoWQtDX17vMlmXGMQhtfAOHdmuR0CQq4bRvslDbrHQiR2twkwCtXcntuP92Afikvb/pPFpLhAPLqfAaDbbzBUrl3Z5xB/U6m1s5agcHKuJWgN/aF0pjp+t5lMoVqlUHVYOcTFgMDmZIJXuefh+Y6NzXRBrcXdejWCor2fxusCyTlwYHujXu3oN7h8g5YD4IAgrFMuVK71LGQSqZYGjo5c5WNZfN2F8fj+t6zPLl6t2trdyXtYP6uYtrQ9M0xkdfxTD0F4qDHiuOVwbSX2madgdQH0AiotlsBoVi6bNu4iDCAvPR4/W3q87+z77vj5ynOCnlVtpOfXj1yqWenSNSJ11d2xCe1/jU2a8tBEHQdxZhQog9O5WcNQz9+8nL42dfAXdidW1Dd73GHbfufu41Gu+ocA1d/9O0zG9NQ/9u8vJ4Iyov9rforycbScs03pWa9p4U4g0EkwIxBRAQPCRg1Q+Cf/xm8/e66/3x1uvjtTh5/ge5WGIs1koIzAAAAABJRU5ErkJggg=="
                                                    data-bg="linear-gradient(#fff, #ccc)"
                                                    data-src="https://assets.essaypro.com/150468/946acc2ae1705ca556862dcf5f2ed77d"
                                                    alt="Professor Dorsey R." class="avatar--medium__image lazy"> </span><span
                                                class="c-24__wr-n">Professor Dorsey R. <span
                                                    class="c-24__wr-s false"></span></span></button></span>
                                    <div class="c-24__wr-d">Experienced writer. I can touch your life with words.</div>
                                </div>
                                <div class="c-24__st">
                                    <div class="c-24__st-li">
                                        <div class="c-24__st-v">810</div>
                                        <div class="c-24__st-l">Orders</div>
                                    </div>
                                    <div class="c-24__st-li">
                                        <div class="c-24__st-v">100%</div>
                                        <div class="c-24__st-l">Success</div>
                                    </div>
                                    <div class="c-24__st-li for__stars">
                                        <div class="c-24__st-v"><span>5.0</span>
                                            <div class="rating-stars">
                                                <div class="rating-stars__bar"></div>
                                                <div class="rating-stars__bar is--active" style="width:100%"></div>
                                            </div>
                                        </div>
                                        <div class="c-24__st-l">Rating</div>
                                    </div>
                                </div>
                            </div>
                            <div class="c-24__ac">
                                <form action="https://app.essaypro.com/auth/register" method="get">
                                    <button type="submit" class="button-as-link button-outline__primary hire"
                                            data-ga-category="writer" data-ga-action="click" data-ga-label="HIRE"><span
                                            class="button-text">Hire</span></button>
                                </form>
                            </div>
                            <div class="c-24__ps ps-17"></div>
                        </li>
                        <li class="c-24__li" data-writer-id="210844">
                            <div class="c-24__i">
                                <div class="c-24__wr"><span data-link="writer/210844.html" class="h-l"><button
                                            type="submit" class="button-as-link"><span
                                                class="c-24__wr-av avatar--medium"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAED0lEQVRYhbWYz1MbZRjHP++7v5JsIGAU5FedasUpU+nBGe3JFg969GhP2qMHOTD9N5RxBg8eHU8e7U0PDuKpOuOBDtOOWIsyFBpCfkGWkN1k18MmJUAT9l3ge9vJ883z3X32ffb7PIKYKFQcA7gO3ADeBK4C062fHwCPgL+B+8ByNmN7cfIIRVESmAFmgY8Vc90DFoDFbMb2o5IiCSxUHAHcBH4AhhWFHUcOuA0sZTN2cFrwqQILFWcM+Am4dkZhx7ECfJTN2Ju9gnoKLFScW8AvgDw/XUfgAx9kM/ZSt4CuiQsVZw5Y7BVzDpDAr61cXQNOoFBx7gLzF6XqBZjvJvJEiVtlXbxoRV1w63i5jwhsHYh1YpTV930ajSZCCgxdjyvQBy5lM/bTEwJbrWQFmFL5x2rVYbfqUKsdEARh1zBNg750mkx/GimV73UFmG63oE72TVVxz3J5nm3vsL9fey4OwHU9CsUST7dy+H7kntzGNeD99oWA51+ITRSacLPZZO2/jVPjLNNkbHRY9UnmgNFsxvbbrBkVcZ7XIL9TjBRbd12KpYqKOFpaZuCwxLMq7O38DlVnP3J8ZXfvyCsQEV8AiJYrcVWYT/5dx/fVEk6MjWBZphIHMCWhZYqMIAiUxUH4zsbAtCT0c5EhhEAIJZcW8tTbDcANSWg2lSClusA4HOCKJHTCStA0TTmTHoMDTEkObXok7O5VcV11954vlJQ5wHXlFyOOuLPwJOGAExmmacRKZBqxDMSyJJy+IsNOJeMkwrZTcWgPJeFoGBmappFIWEpZhBBxb+yxJJxblTAyPERf2o4Ua+g6r02MxrFdAPclsKzK0jRJKuITSSQt9PgG9oFsTfz3VJlpOxWptw3098cRBvBjNmN77ee+oMoWQtDX17vMlmXGMQhtfAOHdmuR0CQq4bRvslDbrHQiR2twkwCtXcntuP92Afikvb/pPFpLhAPLqfAaDbbzBUrl3Z5xB/U6m1s5agcHKuJWgN/aF0pjp+t5lMoVqlUHVYOcTFgMDmZIJXuefh+Y6NzXRBrcXdejWCor2fxusCyTlwYHujXu3oN7h8g5YD4IAgrFMuVK71LGQSqZYGjo5c5WNZfN2F8fj+t6zPLl6t2trdyXtYP6uYtrQ9M0xkdfxTD0F4qDHiuOVwbSX2madgdQH0AiotlsBoVi6bNu4iDCAvPR4/W3q87+z77vj5ynOCnlVtpOfXj1yqWenSNSJ11d2xCe1/jU2a8tBEHQdxZhQog9O5WcNQz9+8nL42dfAXdidW1Dd73GHbfufu41Gu+ocA1d/9O0zG9NQ/9u8vJ4Iyov9rforycbScs03pWa9p4U4g0EkwIxBRAQPCRg1Q+Cf/xm8/e66/3x1uvjtTh5/ge5WGIs1koIzAAAAABJRU5ErkJggg=="
                                                    data-bg="linear-gradient(#fff, #ccc)"
                                                    data-src="https://assets.essaypro.com/210844/Hash4874948.jpg" alt="Tutor Joddy"
                                                    class="avatar--medium__image lazy"> </span><span class="c-24__wr-n">Tutor Joddy <span
                                                    class="c-24__wr-s false"></span></span></button></span>
                                    <div class="c-24__wr-d">I always go that extra mile!</div>
                                </div>
                                <div class="c-24__st">
                                    <div class="c-24__st-li">
                                        <div class="c-24__st-v">664</div>
                                        <div class="c-24__st-l">Orders</div>
                                    </div>
                                    <div class="c-24__st-li">
                                        <div class="c-24__st-v">100%</div>
                                        <div class="c-24__st-l">Success</div>
                                    </div>
                                    <div class="c-24__st-li for__stars">
                                        <div class="c-24__st-v"><span>5.0</span>
                                            <div class="rating-stars">
                                                <div class="rating-stars__bar"></div>
                                                <div class="rating-stars__bar is--active" style="width:100%"></div>
                                            </div>
                                        </div>
                                        <div class="c-24__st-l">Rating</div>
                                    </div>
                                </div>
                            </div>
                            <div class="c-24__ac">
                                <form action="https://app.essaypro.com/auth/register" method="get">
                                    <button type="submit" class="button-as-link button-outline__primary hire"
                                            data-ga-category="writer" data-ga-action="click" data-ga-label="HIRE"><span
                                            class="button-text">Hire</span></button>
                                </form>
                            </div>
                            <div class="c-24__ps ps-18"></div>
                        </li>
                        <li class="c-24__li" data-writer-id="51934">
                            <div class="c-24__i">
                                <div class="c-24__wr"><span data-link="writer/51934.html" class="h-l"><button
                                            type="submit" class="button-as-link"><span
                                                class="c-24__wr-av avatar--medium"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAED0lEQVRYhbWYz1MbZRjHP++7v5JsIGAU5FedasUpU+nBGe3JFg969GhP2qMHOTD9N5RxBg8eHU8e7U0PDuKpOuOBDtOOWIsyFBpCfkGWkN1k18MmJUAT9l3ge9vJ883z3X32ffb7PIKYKFQcA7gO3ADeBK4C062fHwCPgL+B+8ByNmN7cfIIRVESmAFmgY8Vc90DFoDFbMb2o5IiCSxUHAHcBH4AhhWFHUcOuA0sZTN2cFrwqQILFWcM+Am4dkZhx7ECfJTN2Ju9gnoKLFScW8AvgDw/XUfgAx9kM/ZSt4CuiQsVZw5Y7BVzDpDAr61cXQNOoFBx7gLzF6XqBZjvJvJEiVtlXbxoRV1w63i5jwhsHYh1YpTV930ajSZCCgxdjyvQBy5lM/bTEwJbrWQFmFL5x2rVYbfqUKsdEARh1zBNg750mkx/GimV73UFmG63oE72TVVxz3J5nm3vsL9fey4OwHU9CsUST7dy+H7kntzGNeD99oWA51+ITRSacLPZZO2/jVPjLNNkbHRY9UnmgNFsxvbbrBkVcZ7XIL9TjBRbd12KpYqKOFpaZuCwxLMq7O38DlVnP3J8ZXfvyCsQEV8AiJYrcVWYT/5dx/fVEk6MjWBZphIHMCWhZYqMIAiUxUH4zsbAtCT0c5EhhEAIJZcW8tTbDcANSWg2lSClusA4HOCKJHTCStA0TTmTHoMDTEkObXok7O5VcV11954vlJQ5wHXlFyOOuLPwJOGAExmmacRKZBqxDMSyJJy+IsNOJeMkwrZTcWgPJeFoGBmappFIWEpZhBBxb+yxJJxblTAyPERf2o4Ua+g6r02MxrFdAPclsKzK0jRJKuITSSQt9PgG9oFsTfz3VJlpOxWptw3098cRBvBjNmN77ee+oMoWQtDX17vMlmXGMQhtfAOHdmuR0CQq4bRvslDbrHQiR2twkwCtXcntuP92Afikvb/pPFpLhAPLqfAaDbbzBUrl3Z5xB/U6m1s5agcHKuJWgN/aF0pjp+t5lMoVqlUHVYOcTFgMDmZIJXuefh+Y6NzXRBrcXdejWCor2fxusCyTlwYHujXu3oN7h8g5YD4IAgrFMuVK71LGQSqZYGjo5c5WNZfN2F8fj+t6zPLl6t2trdyXtYP6uYtrQ9M0xkdfxTD0F4qDHiuOVwbSX2madgdQH0AiotlsBoVi6bNu4iDCAvPR4/W3q87+z77vj5ynOCnlVtpOfXj1yqWenSNSJ11d2xCe1/jU2a8tBEHQdxZhQog9O5WcNQz9+8nL42dfAXdidW1Dd73GHbfufu41Gu+ocA1d/9O0zG9NQ/9u8vJ4Iyov9rforycbScs03pWa9p4U4g0EkwIxBRAQPCRg1Q+Cf/xm8/e66/3x1uvjtTh5/ge5WGIs1koIzAAAAABJRU5ErkJggg=="
                                                    data-bg="linear-gradient(#fff, #ccc)"
                                                    data-src="https://assets.essaypro.com/51934/ae7baa1fffbd60e337f1f85549507bdc"
                                                    alt="Tutor Meghan Jones" class="avatar--medium__image lazy"> </span><span
                                                class="c-24__wr-n">Tutor Meghan Jones <span
                                                    class="c-24__wr-s true"></span></span></button></span>
                                    <div class="c-24__wr-d">Quality, originality and timely delivery are my assurance.
                                    </div>
                                </div>
                                <div class="c-24__st">
                                    <div class="c-24__st-li">
                                        <div class="c-24__st-v">646</div>
                                        <div class="c-24__st-l">Orders</div>
                                    </div>
                                    <div class="c-24__st-li">
                                        <div class="c-24__st-v">100%</div>
                                        <div class="c-24__st-l">Success</div>
                                    </div>
                                    <div class="c-24__st-li for__stars">
                                        <div class="c-24__st-v"><span>5.0</span>
                                            <div class="rating-stars">
                                                <div class="rating-stars__bar"></div>
                                                <div class="rating-stars__bar is--active" style="width:100%"></div>
                                            </div>
                                        </div>
                                        <div class="c-24__st-l">Rating</div>
                                    </div>
                                </div>
                            </div>
                            <div class="c-24__ac">
                                <form action="https://app.essaypro.com/auth/register" method="get">
                                    <button type="submit" class="button-as-link button-outline__primary hire"
                                            data-ga-category="writer" data-ga-action="click" data-ga-label="HIRE"><span
                                            class="button-text">Hire</span></button>
                                </form>
                            </div>
                            <div class="c-24__ps ps-19"></div>
                        </li>
                        <li class="c-24__li" data-writer-id="163452">
                            <div class="c-24__i">
                                <div class="c-24__wr"><span data-link="writer/163452.html" class="h-l"><button
                                            type="submit" class="button-as-link"><span
                                                class="c-24__wr-av avatar--medium"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAED0lEQVRYhbWYz1MbZRjHP++7v5JsIGAU5FedasUpU+nBGe3JFg969GhP2qMHOTD9N5RxBg8eHU8e7U0PDuKpOuOBDtOOWIsyFBpCfkGWkN1k18MmJUAT9l3ge9vJ883z3X32ffb7PIKYKFQcA7gO3ADeBK4C062fHwCPgL+B+8ByNmN7cfIIRVESmAFmgY8Vc90DFoDFbMb2o5IiCSxUHAHcBH4AhhWFHUcOuA0sZTN2cFrwqQILFWcM+Am4dkZhx7ECfJTN2Ju9gnoKLFScW8AvgDw/XUfgAx9kM/ZSt4CuiQsVZw5Y7BVzDpDAr61cXQNOoFBx7gLzF6XqBZjvJvJEiVtlXbxoRV1w63i5jwhsHYh1YpTV930ajSZCCgxdjyvQBy5lM/bTEwJbrWQFmFL5x2rVYbfqUKsdEARh1zBNg750mkx/GimV73UFmG63oE72TVVxz3J5nm3vsL9fey4OwHU9CsUST7dy+H7kntzGNeD99oWA51+ITRSacLPZZO2/jVPjLNNkbHRY9UnmgNFsxvbbrBkVcZ7XIL9TjBRbd12KpYqKOFpaZuCwxLMq7O38DlVnP3J8ZXfvyCsQEV8AiJYrcVWYT/5dx/fVEk6MjWBZphIHMCWhZYqMIAiUxUH4zsbAtCT0c5EhhEAIJZcW8tTbDcANSWg2lSClusA4HOCKJHTCStA0TTmTHoMDTEkObXok7O5VcV11954vlJQ5wHXlFyOOuLPwJOGAExmmacRKZBqxDMSyJJy+IsNOJeMkwrZTcWgPJeFoGBmappFIWEpZhBBxb+yxJJxblTAyPERf2o4Ua+g6r02MxrFdAPclsKzK0jRJKuITSSQt9PgG9oFsTfz3VJlpOxWptw3098cRBvBjNmN77ee+oMoWQtDX17vMlmXGMQhtfAOHdmuR0CQq4bRvslDbrHQiR2twkwCtXcntuP92Afikvb/pPFpLhAPLqfAaDbbzBUrl3Z5xB/U6m1s5agcHKuJWgN/aF0pjp+t5lMoVqlUHVYOcTFgMDmZIJXuefh+Y6NzXRBrcXdejWCor2fxusCyTlwYHujXu3oN7h8g5YD4IAgrFMuVK71LGQSqZYGjo5c5WNZfN2F8fj+t6zPLl6t2trdyXtYP6uYtrQ9M0xkdfxTD0F4qDHiuOVwbSX2madgdQH0AiotlsBoVi6bNu4iDCAvPR4/W3q87+z77vj5ynOCnlVtpOfXj1yqWenSNSJ11d2xCe1/jU2a8tBEHQdxZhQog9O5WcNQz9+8nL42dfAXdidW1Dd73GHbfufu41Gu+ocA1d/9O0zG9NQ/9u8vJ4Iyov9rforycbScs03pWa9p4U4g0EkwIxBRAQPCRg1Q+Cf/xm8/e66/3x1uvjtTh5/ge5WGIs1koIzAAAAABJRU5ErkJggg=="
                                                    data-bg="linear-gradient(#fff, #ccc)"
                                                    data-src="https://assets.essaypro.com/163452/0a57953cdc723ea13acf71b61ceddc3e"
                                                    alt="Prof. Jack Long" class="avatar--medium__image lazy"> </span><span
                                                class="c-24__wr-n">Prof. Jack Long <span class="c-24__wr-s true"></span></span></button></span>
                                    <div class="c-24__wr-d">Paragon of Excellence!</div>
                                </div>
                                <div class="c-24__st">
                                    <div class="c-24__st-li">
                                        <div class="c-24__st-v">575</div>
                                        <div class="c-24__st-l">Orders</div>
                                    </div>
                                    <div class="c-24__st-li">
                                        <div class="c-24__st-v">100%</div>
                                        <div class="c-24__st-l">Success</div>
                                    </div>
                                    <div class="c-24__st-li for__stars">
                                        <div class="c-24__st-v"><span>5.0</span>
                                            <div class="rating-stars">
                                                <div class="rating-stars__bar"></div>
                                                <div class="rating-stars__bar is--active" style="width:100%"></div>
                                            </div>
                                        </div>
                                        <div class="c-24__st-l">Rating</div>
                                    </div>
                                </div>
                            </div>
                            <div class="c-24__ac">
                                <form action="https://app.essaypro.com/auth/register" method="get">
                                    <button type="submit" class="button-as-link button-outline__primary hire"
                                            data-ga-category="writer" data-ga-action="click" data-ga-label="HIRE"><span
                                            class="button-text">Hire</span></button>
                                </form>
                            </div>
                            <div class="c-24__ps ps-20"></div>
                        </li>
                    </ul>
                    <div id="more_writers" class="p-5__b-g" style="text-align:center;margin-top:20px">
                        <button type="button" class="button-outline__primary"><span class="button-text">Show more</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="s-11">
        <div class="l-0">
            <div class="text-block"><img src="assets/footer/how_used.png" class="how_used"
                                         alt="How Our Service Is Used"></div>
            <div class="order-block">
                <div class="h--md">Order a Custom Academic Paper!</div>
                <p class="p--md">Calculate the approximate cost of your paper</p>
                <div class="button-group"><a
                        href="https://app.essaypro.com/auth/register?_ga=2.89219291.1381202132.1544004610-800698181.1544004610"
                        class="button-filled__primary ga-event" data-ga-category="home" data-ga-action="click"
                        data-ga-label="Place an order"><span class="button-text">Place an order</span></a></div>
                <div class="s-11__c">
                    <div class="c-2 js-calculator-secondary" data-component-name="c-2__as__calculator-secondary">
                        <div class="js-calculator-secondary__form">
                            <form action="https://app.essaypro.com/auth/register" method="get" class="c-2__form">
                                <div class="c-2__main">
                                    <div class="c-2__row" id="servicesDropdownWrapSecondary">
                                        <div class="c-3 dropdown">
                                            <button id="calculator_service_selected_999999" type="button"
                                                    class="c-3__dropdown" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false"><span class="c-3__selected"
                                                                                data-calc-value="1">Writing</span> <span
                                                    class="c-3__placeholder">Service</span> <span
                                                    class="c-3__select-arrow"></span></button>
                                            <div class="c-3__menu dropdown-menu"
                                                 aria-labelledby="calculator_service_selected_999999">
                                                <ul class="c-3__ul"></ul>
                                            </div>
                                        </div>
                                        <div class="select"><select id="calculator_service_999999"
                                                                    aria-label="Calculator services"
                                                                    class="c-3__select"></select> <span
                                                class="c-3__select-arrow"></span></div>
                                    </div>
                                    <div class="c-2__row">
                                        <div class="c-3 dropdown">
                                            <button id="calculator_type_selected_999999" type="button"
                                                    class="c-3__dropdown" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false"><span class="c-3__selected"
                                                                                data-calc-value="1">Essay (any type)</span>
                                                <span class="c-3__placeholder">Type of paper</span> <span
                                                    class="c-3__select-arrow"></span></button>
                                            <div class="c-3__menu dropdown-menu"
                                                 aria-labelledby="calculator_type_selected_999999"><input
                                                    id="searchTypesInputSecondary" class="c-3__search" type="text"
                                                    placeholder="Type to find">
                                                <div class="c-3__ul"></div>
                                            </div>
                                        </div>
                                        <div class="select"><select id="calculator_type_999999"
                                                                    aria-label="Type of calculator"
                                                                    class="c-3__select"></select> <span
                                                class="c-3__select-arrow"></span></div>
                                    </div>
                                    <div class="c-2__row">
                                        <div class="c-3 dropdown">
                                            <button id="calculator_deadline_selected_999999" type="button"
                                                    class="c-3__dropdown" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false"><span class="c-3__selected"
                                                                                data-calc-value="336">2 weeks</span>
                                                <span class="c-3__placeholder">Deadline</span> <span
                                                    class="c-3__select-arrow"></span></button>
                                            <div class="c-3__menu dropdown-menu"
                                                 aria-labelledby="calculator_deadline_selected_999999">
                                                <ul class="c-3__ul">
                                                    <li class="c-3__li" data-calc-value="6">6 hours</li>
                                                    <li class="c-3__li" data-calc-value="12">12 hours</li>
                                                    <li class="c-3__li" data-calc-value="24">1 day</li>
                                                    <li class="c-3__li" data-calc-value="48">2 days</li>
                                                    <li class="c-3__li" data-calc-value="72">3 days</li>
                                                    <li class="c-3__li" data-calc-value="120">5 days</li>
                                                    <li class="c-3__li" data-calc-value="168">7 days</li>
                                                    <li class="c-3__li" data-calc-value="240">10 days</li>
                                                    <li class="c-3__li" data-calc-value="336">2 weeks</li>
                                                    <li class="c-3__li" data-calc-value="720">1 month</li>
                                                    <li class="c-3__li" data-calc-value="1440">2 months</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="select"><select id="calculator_deadline_999999"
                                                                    aria-label="Calculators's deadline"
                                                                    class="c-3__select">
                                                <option value="6">6 hours</option>
                                                <option value="12">12 hours</option>
                                                <option value="24">1 day</option>
                                                <option value="48">2 days</option>
                                                <option value="72">3 days</option>
                                                <option value="120">5 days</option>
                                                <option value="168">7 days</option>
                                                <option value="240">10 days</option>
                                                <option value="336" selected="selected">2 weeks</option>
                                                <option value="720">1 month</option>
                                                <option value="1440">2 months</option>
                                            </select> <span class="c-3__select-arrow"></span></div>
                                    </div>
                                    <div id="pages_fields_999999" class="c-2__row">
                                        <div class="c-2__group">
                                            <div class="c-2__element">
                                                <button id="calculator_pages_decrement_999999" type="button"
                                                        aria-label="calculator pages decrement"
                                                        class="c-3__button-decrement"></button>
                                            </div>
                                            <div class="c-2__element">
                                                <div class="dropdown dropdown-half">
                                                    <button id="calculator_pages_selected_999999" type="button"
                                                            class="c-3__dropdown-half" data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false"><span
                                                            class="c-3__selected" data-calc-value="1">1 page</span>
                                                        <span class="c-3__placeholder">Pages</span> <span
                                                            class="c-3__select-arrow"></span></button>
                                                    <div class="c-3__menu dropdown-menu"
                                                         aria-labelledby="calculator_pages_selected_999999">
                                                        <ul class="c-3__ul pages__list">
                                                            <li class="c-3__li" data-calc-value="1">1 page</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="select"><select id="calculator_pages_999999"
                                                                            aria-label="Calculators pages"
                                                                            class="c-3__select-half">
                                                        <option value="1" selected="selected">1 page</option>
                                                    </select> <span class="c-3__select-arrow"></span></div>
                                            </div>
                                            <div class="c-2__element">
                                                <button id="calculator_pages_increment_999999" type="button"
                                                        aria-label="calculator pages increment"
                                                        class="c-3__button-increment"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="c-2__result">
                                    <div class="c-2__price">
                                        <div class="c-2__price__wrap">
                                            <div class="value c-2__price--min">$<span
                                                    id="calculator_total_999999">0</span></div>
                                            <div class="c-2__price__label">Minimum Price</div>
                                        </div>
                                    </div>
                                    <button type="submit" class="button-filled__primary ga-event"
                                            data-ga-category="calculator" data-ga-action="click"
                                            data-ga-label="Continue"><span class="button-text">Continue</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?GTM-KZ3B2L" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
</noscript>
<noscript>
    <div style="display:inline"><img height="1" width="1" style="border-style:none" alt
                                     src="http://googleads.g.doubleclick.net/pagead/viewthroughconversion/878019161/?guid=ON&amp;script=0">
    </div>
</noscript>

<?php
require_once APPROOT . '/views/inc/footer.php';
?>

</body>

</html>
