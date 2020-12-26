<template>
  <div>
    <MainSection />
    <Cards />
    <WorksSection />
    <WhySection />
  </div>
</template>

<script>
import MainSection from '@/components/MainSection'
import Cards from '@/components/Cards'
import WorksSection from '@/components/WorksSection'
import WhySection from '@/components/WhySection'

export default {
  components: {
    MainSection,
    Cards,
    WorksSection,
    WhySection,
  }
};
</script>

<style>
</style>
