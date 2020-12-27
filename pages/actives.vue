<template>
  <div>
    <ActivesSection/>
    <SliderFirst />
    <ActivesCard/>
    <SliderSecond />
    <Garants/>
    <RedText/>
    <Strategy/>
  </div>
</template>

<script>
import ActivesSection from '@/components/ActivesSection'
import SliderFirst from '@/components/SliderFirst'
import ActivesCard from '@/components/ActivesCard'
import SliderSecond from '@/components/SliderSecond'
import Garants from '@/components/Garants'
import RedText from '@/components/RedText'
import Strategy from '@/components/Strategy'

export default {
  components: {
    ActivesSection,
    SliderFirst,
    ActivesCard,
    SliderSecond,
    Garants,
    RedText,
    Strategy
  }
};
</script>

<style>
</style>
