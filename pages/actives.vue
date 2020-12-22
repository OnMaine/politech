<template>
  <div>
    <ActivesSection/>
    <CompanyGalaryFirst />
    <ActivesCard/>
    <CompanyGalarySecond />
    <Garants/>
    <RedText/>
    <Strategy/>
    <FormSection />
  </div>
</template>

<script>
import ActivesSection from '@/components/ActivesSection'
import CompanyGalaryFirst from '@/components/CompanyGalaryFirst'
import ActivesCard from '@/components/ActivesCard'
import CompanyGalarySecond from '@/components/CompanyGalarySecond'
import Garants from '@/components/Garants'
import RedText from '@/components/RedText'
import Strategy from '@/components/Strategy'
import FormSection from '@/components/FormSection'

export default {
  components: {
    ActivesSection,
    CompanyGalaryFirst,
    ActivesCard,
    CompanyGalarySecond,
    Garants,
    RedText,
    Strategy,
    FormSection,
  }
};
</script>

<style>
</style>
