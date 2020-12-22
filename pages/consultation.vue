<template>
  <div>
    <ConsultationSection />
    <ConsultCards />
    <FormSection />
  </div>
</template>

<script>
import ConsultationSection from '@/components/ConsultationSection'
import FormSection from '@/components/FormSection'
import ConsultCards from '@/components/ConsultCards'

export default {
  components: {
    ConsultationSection,
    ConsultCards,
    FormSection,
  }
};
</script>

<style>
</style>
