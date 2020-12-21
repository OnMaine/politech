<template>
  <div>
    <MainSection />
    <Cards />
    <WorksSection />
    <WhySection />
    <FormSection />
  </div>
</template>

<script>
import MainSection from '@/components/MainSection'
import Cards from '@/components/Cards'
import WorksSection from '@/components/WorksSection'
import WhySection from '@/components/WhySection'
import FormSection from '@/components/FormSection'
export default {
  components: {
    MainSection,
    Cards,
    WorksSection,
    WhySection,
    FormSection,
  }
};
</script>

<style>
</style>
