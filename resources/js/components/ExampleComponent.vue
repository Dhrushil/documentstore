<template>
  <div>
    <tiptap-vuetify v-model="content" :extensions="extensions"/>
  </div>
</template>

<script>
import {
  TiptapVuetify,
  Heading,
  Bold,
  Italic,
  Strike,
  Underline,
  Code,
  Paragraph,
  BulletList,
  OrderedList,
  ListItem,
  Link,
  Blockquote,
  HardBreak,
  HorizontalRule,
  History,
  Image,
  Table,
  TableCell,
  TableHeader,
  TableRow
} from 'tiptap-vuetify'
export default {
  components: { TiptapVuetify },
  data: () => ({
    extensions: [
      History,
      Table,
      TableCell,
      TableHeader,
      TableRow,
      Blockquote,
      Link,
      Underline,
      Strike,
      Italic,
      ListItem, // if you need to use a list (BulletList, OrderedList)
      BulletList,
      OrderedList,
      Image,
      [
        Heading,
        {
          // Options that fall into the tiptap's extension
          options: {
            levels: [1, 2, 3]
          }
        }
      ],
      Bold,
      Link,
      Code,
      HorizontalRule,
      
      Paragraph,
      HardBreak // line break on Shift + Ctrl + Enter
    ],
  })
}
</script>