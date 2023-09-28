import React, { Component, useState, useEffect } from 'react'
import ReactDOM from 'react-dom';
import $ from 'jquery';
import {
    Carousel,
    initTE,
    Modal,
    Ripple,
    LoadingManagement,
    PerfectScrollbar,
    SmoothScroll,
    Popover,
    LazyLoad,
} from "tw-elements";


export function ModalBody(props) {
    const [loading, setLoading] = useState(true);
    const [error, setError] = useState(false);
    const [title, setTitle] = useState(null);
    const [description, setDescription] = useState('');
    const [responsibilities, setResponsibility] = useState([]);
    const [categories, setCategories] = useState([]);
    const [imageList, setImageList] = useState([]);
    const [projectLink, setProjectLink] = useState("");
    const [githubLink, setGithubLink] = useState("");
    useEffect(() => {
        setLoading(true);
        initTE({PerfectScrollbar });

        setTimeout(() => {
            fetch('/ajax/project_detail?name=' + props.project_name)
                .then(response => response.json())
                .then(result => {
                    console.log(result);
                    setTitle(result.title);
                    setCategories(result.category);
                    setImageList(result.image_list);
                    setDescription(result.description);
                    setResponsibility(result.responsibilities);
                    setGithubLink(result.github_link);
                    setProjectLink(result.project_link);
                    setLoading(false);
                })
                .catch(error => {
                    console.error('Error fetching data:', error);
                    setLoading(false);
                    setError(true);
                });
        }, 0); // Simulate a 2-second API call
    }, [props.project_name]);


    return (
        <div className="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
            {/* header */}
            
            {/* body */}
            <div className="relative">
                <button type="button" className="z-[100] m-5 absolute box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none" data-te-modal-dismiss aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth="1.5" stroke="currentColor" className="h-6 w-6">
                        <path strokeLinecap="round" strokeLinejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
                {/* <ImageCarousel image_list={props.image_list} /> */}
                {loading ? (
                    <LoadingImagePlaceholder />
                ) : (
                    <ImageCarousel image_list={imageList} />
                )}
            </div>

            <div className={`px-4 py-2 ${loading ? "animate-pulse" : ""}`}>
                <CategoryBadges categories={categories} isLoading={loading}/>
            </div>

            <div className={`px-4 py-2 ${loading ? "animate-pulse" : ""}`}>
                <ProjectTitle isLoading = {loading} title = {title}/>
            </div>

            <div data-te-perfect-scrollbar-init className='px-4 py-2 max-h-20 overflow-hidden relative'>
                <ProjectDescription isLoading = {loading} description = {description}/>
            </div>
            
            <div data-te-perfect-scrollbar-init className='px-4 py-2 max-h-20 overflow-hidden relative'>
                <ProjectResponsibility isLoading = {loading} responsibilities = {responsibilities}/>
            </div>
            
            <div className='p-4 text-center'>
                <ProjectActionButtons isLoading = {loading} github_link = {githubLink} project_link = {projectLink}/>
            </div>
        </div>
    )
}

export function ProjectActionButtons(props){    
      useEffect(() => {
        initTE({Popover, Ripple});

        //if the link is empty need show popover
        if(!props.project_link){
            new Popover(document.getElementById('project_link_button'), {content: "Project link unavailable", trigger: "hover focus click", placement: "left"});
        }
        if(!props.github_link){
            new Popover(document.getElementById('github_link_button'), {content: "Code unavailable", trigger: "hover focus click", placement: "right"});
        }
    }, []);

    return (
        <>
            <span id='testing123'
                >
                    
            <button
                type="button"
                data-te-ripple-init
                data-te-ripple-color="dark"
                disabled={!props.project_link}
                id='project_link_button'
                className="mx-2 inline-block rounded bg-neutral-50 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-neutral-800 shadow-[0_4px_9px_-4px_#cbcbcb] transition duration-150 ease-in-out hover:bg-neutral-100 hover:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] focus:bg-neutral-100 focus:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] focus:outline-none focus:ring-0 active:bg-neutral-200 active:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(251,251,251,0.3)] dark:hover:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)] dark:focus:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)] dark:active:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)]">
                    View Project
            </button>
            </span>
            <button
                type="button"
                data-te-ripple-init
                data-te-ripple-color="light"
                disabled={!props.github_link}
                id='github_link_button'
                className="mx-2 inline-block rounded bg-neutral-800 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-neutral-50 shadow-[0_4px_9px_-4px_rgba(51,45,45,0.7)] transition duration-150 ease-in-out hover:bg-neutral-800 hover:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] focus:bg-neutral-800 focus:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] focus:outline-none focus:ring-0 active:bg-neutral-900 active:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] dark:bg-neutral-900 dark:shadow-[0_4px_9px_-4px_#030202] dark:hover:bg-neutral-900 dark:hover:shadow-[0_8px_9px_-4px_rgba(3,2,2,0.3),0_4px_18px_0_rgba(3,2,2,0.2)] dark:focus:bg-neutral-900 dark:focus:shadow-[0_8px_9px_-4px_rgba(3,2,2,0.3),0_4px_18px_0_rgba(3,2,2,0.2)] dark:active:bg-neutral-900 dark:active:shadow-[0_8px_9px_-4px_rgba(3,2,2,0.3),0_4px_18px_0_rgba(3,2,2,0.2)]">
                    View Code
            </button>
        </>
    )
}

export function ProjectDescription(props){
    if(props.isLoading){
        return (
            <div className='animate-pulse'>
                <div className="h-4 w-[30rem] rounded-full bg-gray-400 mb-2"></div>
                <div className="h-4 w-[30rem] rounded-full bg-gray-400 "></div>
            </div>
        )
    }
    return (
        <p className='text-base font-light leading-relaxed'>
            {props.description}
        </p>
    )
}

export function ProjectResponsibility(props){

    useEffect(() => {
        if(!props.isLoading){
            console.log(props.responsibilities)
        }
      }, []);
    if(props.isLoading){
        return (
            <div className='animate-pulse'>
                <div className="h-4 w-[30rem] rounded-full bg-gray-400 mb-2"></div>
            </div>
        )
    }
    return (
        <ul className="list-inside  list-disc">
            {props.responsibilities.map((item, index) => (
                <li className='italic' key={index}>{item}</li>
            ))}
        </ul>
        // <p><em>Responsibility: {props.responsibilities}</em></p>
    )
}

export function ProjectTitle(props) {
    if (props.isLoading) {
        return <div className="h-8 w-[20rem] rounded-full bg-gray-400 "></div>
    }
    return <h2 className="
                text-white
                font-bold
                text-3xl
                sm:text-[32px]
                leading-tight
                mb-6
                sm:mb-8
                lg:mb-0
            ">
        {props.title}
    </h2>
}

export function CategoryBadges(props) {
    let categories_list = [];
    //dummy badge if state is loading
    if(props.isLoading){
        categories_list.push(
            <span
                key={1}
                className="mr-2 w-10 h-4 inline-block whitespace-nowrap rounded-full px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-bold leading-none text-neutral-50 bg-gray-400"
            ></span>
        );
        categories_list.push(
            <span
                key={2}
                className="mr-2 w-10 h-4 inline-block whitespace-nowrap rounded-full px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-bold leading-none text-neutral-50 bg-gray-400"
            ></span>
        );
    } else{
        props.categories.forEach((category) => {
            categories_list.push(
              <span
                key={category}
                className="mr-2 inline-block whitespace-nowrap rounded-full bg-neutral-800 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-bold leading-none text-neutral-50 dark:bg-neutral-900"
              >
                {category}
              </span>
            );
          });
    }
  
    return categories_list;
  }

export function ImageCarousel(props){
    const imageSize = '350px'
    useEffect(() => {
        //init carousel after done render
        initTE({ Carousel, LoadingManagement });
      }, []);
    let image_list = [];

    for (let i = 0; i < props.image_list.length; i++) {
        image_list.push(<div
            className={`relative float-left h-[${imageSize}] -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none  ${
                i === 0 ? '' : 'hidden'
              }`}
              {...(i === 0 ? { 'data-te-carousel-active': true } : null)}
            key={i}
            data-te-carousel-item
            style={{ backfaceVisibility: 'hidden' }}>
            <img
                data-te-lazy-load-init
                data-te-lazy-src="sample"
                data-te-lazy-delay="5000"
                data-te-lazy-placeholder="https://place-hold.it/1321x583?text=Loading"
                data-te-lazy-error="https://place-hold.it/1321x583?text=Error"
                src={props.image_list[i]}
                className={`blur-lg w-full left-0 right-0 top-0 bottom-0 m-auto h-[${imageSize}]`}
            />
            <img
                data-te-lazy-load-init
                data-te-lazy-src="sample"
                data-te-lazy-delay="5000"
                data-te-lazy-placeholder="https://place-hold.it/1321x583?text=Loading"
                data-te-lazy-error="https://place-hold.it/1321x583?text=Error"
                src={props.image_list[i]}
                className={`absolute left-0 right-0 top-0 bottom-0 m-auto h-[${imageSize}]`}
            />
        </div>);
    }

    return (
        <div
            id="carouselExampleCaptions"
            className="relative"
            data-te-carousel-init
            data-te-ride="carousel"
            data-te-interval="false"
        >
            <div className="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
                {image_list}
            </div>

            <button
                className="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                type="button"
                data-te-target="#carouselExampleCaptions"
                data-te-slide="prev">
                <span className="inline-block h-8 w-8">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        strokeWidth="1.5"
                        stroke="currentColor"
                        className="h-6 w-6">
                        <path
                            strokeLinecap="round"
                            strokeLinejoin="round"
                            d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
                </span>
                <span className="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">
                    Previous
                </span>
            </button>
            <button
                className="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                type="button"
                data-te-target="#carouselExampleCaptions"
                data-te-slide="next">
                <span className="inline-block h-8 w-8">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        strokeWidth="1.5"
                        stroke="currentColor"
                        className="h-6 w-6">
                        <path
                            strokeLinecap="round"
                            strokeLinejoin="round"
                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </span>
                <span className="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">
                    Next
                </span>
            </button>
        </div>
    )
}

export function LoadingImagePlaceholder() {
    const imageSize = '350px'
    return (
        <div id="loading-custom-icon" className={`w-full animate-puls h-[${imageSize}]`}>
            <div
            data-te-loading-management-init
            data-te-parent-selector="#loading-custom-icon" 
            className='absolute top-[50%] left-[50%] -translate-x-[50%] -translate-y-[50%] flex flex-col justify-center items-center z-40'>
            <div
                data-te-loading-icon-ref
                className="inline-block h-8 w-8 animate-[spinner-grow_0.75s_linear_infinite] rounded-full bg-current opacity-0 motion-reduce:animate-[spinner-grow_1.5s_linear_infinite]"
                role="status">
            </div>
            <span data-te-loading-text-ref className='p-2'>Loading...</span>
            </div>
        </div>
    );
}

initTE({ Modal, SmoothScroll, LazyLoad });
const myModal = new Modal(document.getElementById("projectDetailModal"));



$('.project-modal').on('click', function () {
    
    ReactDOM.render(<ModalBody project_name={$(this).data('app_name')} />, document.getElementById('projectDetailModalBody'));

    myModal.show();
})