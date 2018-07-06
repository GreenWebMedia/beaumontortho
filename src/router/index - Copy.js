import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '@/pages/home/home'
import AboutUs from '@/pages/about-us/about-us'
import PageNotFound from '@/pages/404/404'
import MeetTheDoctors from '@/pages/meet-the-doctors/meet-the-doctors'
import MeetOurStaff from '@/pages/meet-our-staff/meet-our-staff'
import FinancialAndInsurance from '@/pages/financial-and-insurance/financial-and-insurance'
import OfficePoliciesAndMission from '@/pages/office-policies-and-mission/office-policies-and-mission'
import MapAndDirections from '@/pages/map-and-directions/map-and-directions'
import PatientTestimonials from '@/pages/patient-testimonials/patient-testimonials'
import OfficeTourAndPhotoGallery from '@/pages/office-tour-and-photo-gallery/office-tour-and-photo-gallery'
import PracticeEvents from '@/pages/practice-events/practice-events'
import OurBeaumontTxOffice from '@/pages/our-beaumont-tx-office/our-beaumont-tx-office'
import ReferOurOffice from '@/pages/refer-our-office/refer-our-office'
import AppointmentRequest from '@/pages/appointment-request/appointment-request'
import WhyChooseUs from '@/pages/why-choose-us/why-choose-us'
import FirstVisit from '@/pages/first-visit/first-visit'
import Faq from '@/pages/faq/faq'
import BeforeAndAfterPhotos from '@/pages/before-and-after-photos/before-and-after-photos'
import CommonProblems from '@/pages/common-problems/common-problems'
import EmergencyInfo from '@/pages/emergency-info/emergency-info'
import FoodsToAvoid from '@/pages/foods-to-avoid/foods-to-avoid'
import BrushingAndFlossing from '@/pages/brushing-and-flossing/brushing-and-flossing'
import WhenToSeeAnOrthodontist from '@/pages/when-to-see-an-orthodontist/when-to-see-an-orthodontist'
import EarlyTreatment from '@/pages/early-treatment/early-treatment'
import PhaseIiAdolescentTreatment from '@/pages/phase-ii-adolescent-treatment/phase-ii-adolescent-treatment'
import AdultTreatment from '@/pages/adult-treatment/adult-treatment'
import TypesOfBraces from '@/pages/types-of-braces/types-of-braces'
import Invisalign from '@/pages/invisalign/invisalign'
import Retention from '@/pages/retention/retention'
import JawSurgery from '@/pages/jaw-surgery/jaw-surgery'
import Tmj from '@/pages/tmj/tmj'
import PalatalExpander from '@/pages/palatal-expander/palatal-expander'
import Games from '@/pages/games/games'
import BandColorChooser from '@/pages/band-color-chooser/band-color-chooser'
import RelatedLinks from '@/pages/related-links/related-links'
import PatientGallery from '@/pages/patient-gallery/patient-gallery'
import Glossary from '@/pages/glossary/glossary'
import PartsOfBraces from '@/pages/parts-of-braces/parts-of-braces'
import Feedback from '@/pages/feedback/feedback'
import ContactUs from '@/pages/contact-us/contact-us'
import Blog from '@/pages/blog/blog'

Vue.use(VueRouter)

const router = new VueRouter({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'home',
      navigation: true,
      component: Home
    },
    {
      path: '/about-us',
      name: 'about-us',
      navigation: true,
      component: AboutUs
    },
    {
      path: '/meet-the-doctors',
      name: 'meet-the-doctors',
      navigation: true,
      component: MeetTheDoctors
    },
    {
      path: '/meet-our-staff',
      name: 'meet-our-staff',
      navigation: true,
      component: MeetOurStaff
    },
    {
      path: '/financial-and-insurance',
      name: 'financial-and-insurance',
      navigation: true,
      component: FinancialAndInsurance
    },
    {
      path: '/office-policies-and-mission',
      name: 'office-policies-and-mission',
      navigation: true,
      component: OfficePoliciesAndMission
    },
    {
      path: '/map-and-directions',
      name: 'map-and-directions',
      navigation: true,
      component: MapAndDirections
    },
    {
      path: '/patient-testimonials',
      name: 'patient-testimonials',
      navigation: true,
      component: PatientTestimonials
    },
    {
      path: '/office-tour-and-photo-gallery',
      name: 'office-tour-and-photo-gallery',
      navigation: true,
      component: OfficeTourAndPhotoGallery
    },
    {
      path: '/practice-events',
      name: 'practice-events',
      navigation: true,
      component: PracticeEvents
    },
    {
      path: '/our-beaumont-tx-office',
      name: 'our-beaumont-tx-office',
      navigation: true,
      component: OurBeaumontTxOffice
    },
    {
      path: '/refer-our-office',
      name: 'refer-our-office',
      navigation: true,
      component: ReferOurOffice
    },
    {
      path: '/appointment-request',
      name: 'appointment-request',
      navigation: true,
      component: AppointmentRequest
    },
    {
      path: '/why-choose-us',
      name: 'why-choose-us',
      navigation: true,
      component: WhyChooseUs
    },
    {
      path: '/first-visit',
      name: 'first-visit',
      navigation: true,
      component: FirstVisit
    },
    {
      path: '/faq',
      name: 'faq',
      navigation: true,
      component: Faq
    },
    {
      path: '/before-and-after-photos',
      name: 'before-and-after-photos',
      navigation: true,
      component: BeforeAndAfterPhotos
    },
    {
      path: '/common-problems',
      name: 'common-problems',
      navigation: true,
      component: CommonProblems
    },
    {
      path: '/emergency-info',
      name: 'emergency-info',
      navigation: true,
      component: EmergencyInfo
    },
    {
      path: '/foods-to-avoid',
      name: 'foods-to-avoid',
      navigation: true,
      component: FoodsToAvoid
    },
    {
      path: '/brushing-and-flossing',
      name: 'brushing-and-flossing',
      navigation: true,
      component: BrushingAndFlossing
    },
    {
      path: '/when-to-see-an-orthodontist',
      name: 'when-to-see-an-orthodontist',
      navigation: true,
      component: WhenToSeeAnOrthodontist
    },
    {
      path: '/early-treatment',
      name: 'early-treatment',
      navigation: true,
      component: EarlyTreatment
    },
    {
      path: '/phase-ii-adolescent-treatment',
      name: 'phase-ii-adolescent-treatment',
      navigation: true,
      component: PhaseIiAdolescentTreatment
    },
    {
      path: '/adult-treatment',
      name: 'adult-treatment',
      navigation: true,
      component: AdultTreatment
    },
    {
      path: '/types-of-braces',
      name: 'types-of-braces',
      navigation: true,
      component: TypesOfBraces
    },
    {
      path: '/invisalign',
      name: 'invisalign',
      navigation: true,
      component: Invisalign
    },
    {
      path: '/retention',
      name: 'retention',
      navigation: true,
      component: Retention
    },
    {
      path: '/jaw-surgery',
      name: 'jaw-surgery',
      navigation: true,
      component: JawSurgery
    },
    {
      path: '/tmj',
      name: 'tmj',
      navigation: true,
      component: Tmj
    },
    {
      path: '/palatal-expander',
      name: 'palatal-expander',
      navigation: true,
      component: PalatalExpander
    },
    {
      path: '/games',
      name: 'games',
      navigation: true,
      component: Games
    },
    {
      path: '/band-color-chooser',
      name: 'band-color-chooser',
      navigation: true,
      component: BandColorChooser
    },
    {
      path: '/related-links',
      name: 'related-links',
      navigation: true,
      component: RelatedLinks
    },
    {
      path: '/patient-gallery',
      name: 'patient-gallery',
      navigation: true,
      component: PatientGallery
    },
    {
      path: '/glossary',
      name: 'glossary',
      navigation: true,
      component: Glossary
    },
    {
      path: '/parts-of-braces',
      name: 'parts-of-braces',
      navigation: true,
      component: PartsOfBraces
    },
    {
      path: '/feedback',
      name: 'feedback',
      navigation: true,
      component: Feedback
    },
    {
      path: '/contact-us',
      name: 'contact-us',
      navigation: true,
      component: ContactUs
    },
    {
      path: '/blog',
      name: 'blog',
      navigation: true,
      component: Blog
    },
    {
      path: '/*',
      name: 'page-not-found',
      navigation: false,
      component: PageNotFound
    }
  ]
})

router.beforeEach((to, from, next) => {
  window.scrollTo(0, 0)
  next()
})

export default router
