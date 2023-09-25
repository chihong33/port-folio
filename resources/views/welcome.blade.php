<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Joseph | Portfolio</title>
    <link rel="icon" type="image/x-icon" href="{{asset('img/suitcase.png')}}">

    
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
        .section-container {
            transition: background .2s ease;
        }

        .timeline {
            position: relative;
            width: 100%;
            max-width: 1140px;
            margin: 0 auto;
            padding: 15px 0;
        }

        .timeline::after {
            content: '';
            position: absolute;
            width: 2px;
            background: #000000;
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -1px;
        }

        .timeline-container {
            padding: 15px 30px;
            position: relative;
            background: inherit;
            width: 50%;
        }

        .timeline-container.left {
            left: 0;
        }

        .timeline-container.right {
            left: 50%;
        }

        .timeline-container::after {
            content: '';
            position: absolute;
            width: 16px;
            height: 16px;
            top: calc(50% - 8px);
            right: -8px;
            background: #ffffff;
            border: 2px solid #000000;
            border-radius: 16px;
            z-index: 1;
        }

        .timeline-container.right::after {
            left: -8px;
        }

        .timeline-container::before {
            content: '';
            position: absolute;
            width: 50px;
            height: 2px;
            top: calc(50% - 1px);
            right: 8px;
            background: #000000;
            z-index: 1;
        }

        .timeline-container.right::before {
            left: 8px;
        }

        .timeline-container .date {
            position: absolute;
            display: inline-block;
            top: calc(50% - 8px);
            text-align: center;
            font-size: 14px;
            font-weight: bold;
            color: #000000;
            text-transform: uppercase;
            letter-spacing: 1px;
            z-index: 1;
        }

        .timeline-container.left .date {
            right: -200px;
        }

        .timeline-container.right .date {
            left: -180px;
        }

        .timeline-container .icon {
            position: absolute;
            display: inline-block;
            width: 40px;
            height: 40px;
            padding: 9px 0;
            top: calc(50% - 15px);
            background: #F6D155;
            border: 2px solid #000000;
            border-radius: 40px;
            text-align: center;
            font-size: 18px;
            color: #000000;
            z-index: 1;
        }

        .timeline-container.left .icon {
            right: 56px;
        }

        .timeline-container.right .icon {
            left: 56px;
        }

        .timeline-container .content {
            padding: 30px 90px 30px 30px;
            background: #F6D155;
            position: relative;
            border-radius: 0 500px 500px 0;
        }

        .timeline-container.right .content {
            padding: 30px 30px 30px 90px;
            border-radius: 500px 0 0 500px;
        }

        /* .timeline-container .content h2 {
            margin: 0 0 10px 0;
            font-size: 18px;
            font-weight: normal;
            color: #000000;
        }

        .timeline-container .content p {
            margin: 0;
            font-size: 16px;
            line-height: 22px;
            color: #000000;
        } */

        @media (max-width: 767.98px) {
            .timeline::after {
                left: 90px;
            }

            .timeline-container {
                width: 100%;
                padding-left: 120px;
                padding-right: 30px;
            }

            .timeline-container.right {
                left: 0%;
            }

            .timeline-container.left::after,
            .timeline-container.right::after {
                left: 82px;
            }

            .timeline-container.left::before,
            .timeline-container.right::before {
                left: 100px;
                border-color: transparent #000000 transparent transparent;
            }

            .timeline-container.left .date,
            .timeline-container.right .date {
                right: auto;
                left: 15px;
                width: 50px;
            }

            .timeline-container.left .icon,
            .timeline-container.right .icon {
                right: auto;
                left: 146px;
            }

            .timeline-container.left .content,
            .timeline-container.right .content {
                padding: 30px 30px 30px 90px;
                border-radius: 500px 0 0 500px;
            }
        }
    </style>
</head>

<body class="antialiased text-gray-200">
    <div class="min-h-screen bg-gray-900 pt-24">
        <x-layout.navbar></x-layout.navbar>
        <x-home.intro></x-home.intro>
        <x-home.work-experience></x-home.work-experience>
        <x-home.call-to-action></x-home.call-to-action>
        <x-home.projects></x-home.projects>
    </div>

    <div data-te-modal-init class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="projectDetailModal" tabindex="-1" aria-labelledby="projectDetailModalLabel" aria-modal="true" role="dialog">
        <div data-te-modal-dialog-ref class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px] min-[992px]:max-w-[800px] flex min-h-[calc(100%-1rem)] items-center min-[576px]:min-h-[calc(100%-3.5rem)]">
            <div class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600" id="projectDetailModalBody">
                
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>

    <script>
        // var $target = $('.main-section-container');
        inView.offset({
            top: 50,
            right: 75,
            bottom: 50,
            left: 75
        });
        inView.threshold(0.5);
        inView('.section-container').on('enter', function(el) {
            var color = $(el).attr('data-bg-color');
            var sectionHead = $(el).attr('data-section');

            $(".section-container").css('background-color', color);

            $(".section_head").css('background-color', '');
            $("." + sectionHead).css('background-color', '#002e79');
        });
    </script>
</body>

</html>