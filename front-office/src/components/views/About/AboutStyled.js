import styled from 'styled-components';
import theme from '../../../theme/theme';

const AboutStyled = styled.div`
  margin: 0 1em;
  text-align: center;
  margin-bottom: 4em;


  h2{
    margin: 1em auto;
  }
  div p {
    text-align: left;
  }

  p.sub-txt {
    text-align: center;
    margin-bottom: 1em;
  }

  div.first-paragraph {
    margin-bottom: 2em;
  }

  img {
   width: 100%; 
  }

  @media (min-width: 900px) {

    div.first-paragraph {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;

      div:first-child {
        width: 100%;
      }
      img.first-paragraph--img, p.first-paragraph--content {
        width: 47%; 
      }

      img.first-paragraph--img {
        object-fit: cover;
        margin-left: -1em;
      }

      p.first-paragraph--content {
        margin: 3em 2em 3em 1em;
      }
    }

    div.second-paragraph {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      
      h2.title {
        width: 100%;
        order: 1;
      }

      img {
        width: 32%;
        order: 3;
        object-fit: cover;
        margin-right: -1em;
      }

      p { 
        width: 62%;
        order: 2;
        margin-top: 0;
      }
    }
  }

`;

export default AboutStyled;